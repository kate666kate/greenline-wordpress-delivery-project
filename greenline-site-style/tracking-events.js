(function () {
  function pushEvent(eventData) {
    window.dataLayer = window.dataLayer || [];
    window.dataLayer.push(eventData);
  }

  function pushLeadEvent(formId) {
    pushEvent({
      event: "generate_lead",
      form_plugin: "contact_form_7",
      form_id: formId || "",
      event_source: "contact_form"
    });
  }

  document.addEventListener("wpcf7mailsent", function (event) {
    var detail = event && event.detail ? event.detail : {};
    pushLeadEvent(detail.contactFormId);
  });

  document.addEventListener("click", function (event) {
    var phoneLink = event.target.closest('a[href^="tel:"]');
    var emailLink = event.target.closest('a[href^="mailto:"]');
    var ctaLink = event.target.closest(
      '.greenline-toolkit-button, .wp-block-button__link[href*="/contact/"]'
    );

    if (phoneLink) {
      pushEvent({
        event: "phone_click",
        event_source: "phone_link",
        link_url: phoneLink.getAttribute("href")
      });
    }

    if (emailLink) {
      pushEvent({
        event: "email_click",
        event_source: "email_link",
        link_url: emailLink.getAttribute("href")
      });
    }

    if (ctaLink) {
      pushEvent({
        event: "cta_click",
        event_source: ctaLink.classList.contains("greenline-toolkit-button") ? "greenline_cta" : "wp_block_button",
        link_text: ctaLink.textContent.trim(),
        link_url: ctaLink.getAttribute("href")
      });
    }
  });
})();
