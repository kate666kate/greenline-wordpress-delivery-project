<?php
/**
 * Plugin Name: Greenline Site Toolkit
 * Description: Practice toolkit for the Greenline Studio WordPress build: styling, shortcodes, portfolio content, REST data, and WooCommerce awareness.
 * Version: 1.1.0
 */

if (!defined('ABSPATH')) {
    exit;
}

define('GREENLINE_SITE_TOOLKIT_VERSION', '1.1.0');
define('GREENLINE_SITE_TOOLKIT_OPTION', 'greenline_site_toolkit_options');

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style(
        'greenline-site-toolkit',
        plugin_dir_url(__FILE__) . 'style.css',
        [],
        GREENLINE_SITE_TOOLKIT_VERSION
    );
});

function greenline_site_toolkit_defaults()
{
    return [
        'contact_email' => 'hello@greenlinestudio.example',
        'phone' => '(03) 9000 0000',
        'cta_heading' => 'Ready to refresh your workspace?',
        'cta_text' => 'Book a plant styling consultation and we will recommend a low-maintenance greenery plan for your office.',
        'cta_button_text' => 'Request a Consultation',
        'cta_button_url' => '/contact/',
        'business_hours' => "Monday - Friday: 9:00am - 5:00pm\nSaturday: By appointment\nSunday: Closed",
    ];
}

function greenline_site_toolkit_options()
{
    $saved = get_option(GREENLINE_SITE_TOOLKIT_OPTION, []);
    return wp_parse_args(is_array($saved) ? $saved : [], greenline_site_toolkit_defaults());
}

function greenline_site_toolkit_sanitize_options($input)
{
    $defaults = greenline_site_toolkit_defaults();
    $input = is_array($input) ? $input : [];

    return [
        'contact_email' => sanitize_email($input['contact_email'] ?? $defaults['contact_email']),
        'phone' => sanitize_text_field($input['phone'] ?? $defaults['phone']),
        'cta_heading' => sanitize_text_field($input['cta_heading'] ?? $defaults['cta_heading']),
        'cta_text' => sanitize_textarea_field($input['cta_text'] ?? $defaults['cta_text']),
        'cta_button_text' => sanitize_text_field($input['cta_button_text'] ?? $defaults['cta_button_text']),
        'cta_button_url' => esc_url_raw($input['cta_button_url'] ?? $defaults['cta_button_url']),
        'business_hours' => sanitize_textarea_field($input['business_hours'] ?? $defaults['business_hours']),
    ];
}

add_action('admin_menu', function () {
    add_options_page(
        'Greenline Site Toolkit',
        'Greenline Toolkit',
        'manage_options',
        'greenline-site-toolkit',
        'greenline_site_toolkit_render_settings_page'
    );
});

add_action('admin_init', function () {
    register_setting(
        'greenline_site_toolkit',
        GREENLINE_SITE_TOOLKIT_OPTION,
        [
            'type' => 'array',
            'sanitize_callback' => 'greenline_site_toolkit_sanitize_options',
            'default' => greenline_site_toolkit_defaults(),
        ]
    );
});

function greenline_site_toolkit_render_settings_page()
{
    if (!current_user_can('manage_options')) {
        return;
    }

    $options = greenline_site_toolkit_options();
    ?>
    <div class="wrap">
        <h1>Greenline Site Toolkit</h1>
        <p>Client-editable content used by Greenline shortcodes and demo components.</p>

        <form method="post" action="options.php">
            <?php settings_fields('greenline_site_toolkit'); ?>

            <table class="form-table" role="presentation">
                <tr>
                    <th scope="row"><label for="greenline-contact-email">Contact email</label></th>
                    <td><input id="greenline-contact-email" class="regular-text" type="email" name="<?php echo esc_attr(GREENLINE_SITE_TOOLKIT_OPTION); ?>[contact_email]" value="<?php echo esc_attr($options['contact_email']); ?>"></td>
                </tr>
                <tr>
                    <th scope="row"><label for="greenline-phone">Phone</label></th>
                    <td><input id="greenline-phone" class="regular-text" type="text" name="<?php echo esc_attr(GREENLINE_SITE_TOOLKIT_OPTION); ?>[phone]" value="<?php echo esc_attr($options['phone']); ?>"></td>
                </tr>
                <tr>
                    <th scope="row"><label for="greenline-cta-heading">CTA heading</label></th>
                    <td><input id="greenline-cta-heading" class="regular-text" type="text" name="<?php echo esc_attr(GREENLINE_SITE_TOOLKIT_OPTION); ?>[cta_heading]" value="<?php echo esc_attr($options['cta_heading']); ?>"></td>
                </tr>
                <tr>
                    <th scope="row"><label for="greenline-cta-text">CTA text</label></th>
                    <td><textarea id="greenline-cta-text" class="large-text" rows="3" name="<?php echo esc_attr(GREENLINE_SITE_TOOLKIT_OPTION); ?>[cta_text]"><?php echo esc_textarea($options['cta_text']); ?></textarea></td>
                </tr>
                <tr>
                    <th scope="row"><label for="greenline-cta-button-text">CTA button text</label></th>
                    <td><input id="greenline-cta-button-text" class="regular-text" type="text" name="<?php echo esc_attr(GREENLINE_SITE_TOOLKIT_OPTION); ?>[cta_button_text]" value="<?php echo esc_attr($options['cta_button_text']); ?>"></td>
                </tr>
                <tr>
                    <th scope="row"><label for="greenline-cta-button-url">CTA button URL</label></th>
                    <td><input id="greenline-cta-button-url" class="regular-text" type="url" name="<?php echo esc_attr(GREENLINE_SITE_TOOLKIT_OPTION); ?>[cta_button_url]" value="<?php echo esc_url($options['cta_button_url']); ?>"></td>
                </tr>
                <tr>
                    <th scope="row"><label for="greenline-business-hours">Business hours</label></th>
                    <td><textarea id="greenline-business-hours" class="large-text" rows="5" name="<?php echo esc_attr(GREENLINE_SITE_TOOLKIT_OPTION); ?>[business_hours]"><?php echo esc_textarea($options['business_hours']); ?></textarea></td>
                </tr>
            </table>

            <?php submit_button(); ?>
        </form>
    </div>
    <?php
}

add_shortcode('greenline_cta', function ($atts) {
    $options = greenline_site_toolkit_options();
    $atts = shortcode_atts(
        [
            'heading' => $options['cta_heading'],
            'text' => $options['cta_text'],
            'button_text' => $options['cta_button_text'],
            'button_url' => $options['cta_button_url'],
        ],
        $atts,
        'greenline_cta'
    );

    ob_start();
    ?>
    <section class="greenline-toolkit-cta">
        <div>
            <p class="greenline-toolkit-eyebrow">Greenline Studio</p>
            <h2><?php echo esc_html($atts['heading']); ?></h2>
            <p><?php echo esc_html($atts['text']); ?></p>
        </div>
        <a class="greenline-toolkit-button" href="<?php echo esc_url($atts['button_url']); ?>">
            <?php echo esc_html($atts['button_text']); ?>
        </a>
    </section>
    <?php
    return ob_get_clean();
});

add_shortcode('greenline_hours', function () {
    $options = greenline_site_toolkit_options();
    $lines = array_filter(array_map('trim', explode("\n", $options['business_hours'])));

    ob_start();
    ?>
    <div class="greenline-toolkit-hours">
        <h3>Business Hours</h3>
        <ul>
            <?php foreach ($lines as $line) : ?>
                <li><?php echo esc_html($line); ?></li>
            <?php endforeach; ?>
        </ul>
        <p>
            <strong>Email:</strong>
            <a href="mailto:<?php echo esc_attr($options['contact_email']); ?>"><?php echo esc_html($options['contact_email']); ?></a>
        </p>
        <p><strong>Phone:</strong> <?php echo esc_html($options['phone']); ?></p>
    </div>
    <?php
    return ob_get_clean();
});

add_action('init', function () {
    greenline_site_toolkit_register_portfolio_post_type();
});

function greenline_site_toolkit_register_portfolio_post_type()
{
    register_post_type('greenline_portfolio', [
        'labels' => [
            'name' => 'Portfolio Projects',
            'singular_name' => 'Portfolio Project',
            'add_new_item' => 'Add New Portfolio Project',
            'edit_item' => 'Edit Portfolio Project',
        ],
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-palmtree',
        'show_in_rest' => true,
        'rewrite' => ['slug' => 'portfolio-projects'],
        'supports' => ['title', 'editor', 'excerpt', 'thumbnail', 'custom-fields'],
    ]);
}

register_activation_hook(__FILE__, function () {
    greenline_site_toolkit_register_portfolio_post_type();
    flush_rewrite_rules();
});

register_deactivation_hook(__FILE__, function () {
    flush_rewrite_rules();
});

add_action('rest_api_init', function () {
    register_rest_route('greenline/v1', '/portfolio', [
        'methods' => 'GET',
        'callback' => 'greenline_site_toolkit_rest_portfolio',
        'permission_callback' => '__return_true',
        'args' => [
            'per_page' => [
                'default' => 6,
                'sanitize_callback' => 'absint',
            ],
        ],
    ]);
});

function greenline_site_toolkit_rest_portfolio(WP_REST_Request $request)
{
    $per_page = min(max((int) $request->get_param('per_page'), 1), 12);
    $query = new WP_Query([
        'post_type' => 'greenline_portfolio',
        'post_status' => 'publish',
        'posts_per_page' => $per_page,
        'no_found_rows' => true,
    ]);

    $projects = array_map(function ($post) {
        return [
            'id' => $post->ID,
            'title' => get_the_title($post),
            'excerpt' => get_the_excerpt($post),
            'url' => get_permalink($post),
            'featured_image' => get_the_post_thumbnail_url($post, 'large') ?: null,
        ];
    }, $query->posts);

    return rest_ensure_response([
        'count' => count($projects),
        'projects' => $projects,
    ]);
}

function greenline_site_toolkit_is_woocommerce_active()
{
    if (class_exists('WooCommerce')) {
        return true;
    }

    $active_plugins = (array) get_option('active_plugins', []);
    return in_array('woocommerce/woocommerce.php', $active_plugins, true);
}

add_shortcode('greenline_woocommerce_status', function () {
    $is_active = greenline_site_toolkit_is_woocommerce_active();

    return sprintf(
        '<div class="greenline-toolkit-woo-status %1$s"><strong>WooCommerce:</strong> %2$s</div>',
        $is_active ? 'is-active' : 'is-inactive',
        $is_active ? 'Active - eCommerce features are available.' : 'Not active - install WooCommerce before enabling shop features.'
    );
});

add_action('admin_notices', function () {
    $screen = function_exists('get_current_screen') ? get_current_screen() : null;

    if (!$screen || $screen->id !== 'settings_page_greenline-site-toolkit') {
        return;
    }

    if (greenline_site_toolkit_is_woocommerce_active()) {
        echo '<div class="notice notice-success"><p><strong>Greenline Site Toolkit:</strong> WooCommerce is active.</p></div>';
        return;
    }

    echo '<div class="notice notice-info"><p><strong>Greenline Site Toolkit:</strong> WooCommerce is not active. This is fine for the brochure site, but shop-specific features require WooCommerce.</p></div>';
});

add_action('init', function () {
    foreach (['_yoast_wpseo_title', '_yoast_wpseo_metadesc', '_yoast_wpseo_focuskw'] as $meta_key) {
        register_post_meta('page', $meta_key, [
            'single' => true,
            'type' => 'string',
            'show_in_rest' => true,
            'auth_callback' => function () {
                return current_user_can('edit_pages');
            },
        ]);
    }
});
