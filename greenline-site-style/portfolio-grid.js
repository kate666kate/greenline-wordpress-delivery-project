(function () {
  function escapeHtml(value) {
    return String(value || "")
      .replace(/&/g, "&amp;")
      .replace(/</g, "&lt;")
      .replace(/>/g, "&gt;")
      .replace(/"/g, "&quot;")
      .replace(/'/g, "&#039;");
  }

  function renderProject(project) {
    var image = project.featured_image
      ? '<img src="' + escapeHtml(project.featured_image) + '" alt="">'
      : '<div class="greenline-portfolio-card__placeholder">Greenline</div>';

    return (
      '<article class="greenline-portfolio-card">' +
      image +
      '<div class="greenline-portfolio-card__body">' +
      '<h3>' + escapeHtml(project.title) + '</h3>' +
      '<p>' + escapeHtml(project.excerpt) + '</p>' +
      '<a href="' + escapeHtml(project.url) + '">View project</a>' +
      '</div>' +
      '</article>'
    );
  }

  function loadGrid(grid) {
    var endpoint = window.greenlinePortfolioGrid && window.greenlinePortfolioGrid.endpoint;
    var perPage = grid.getAttribute("data-per-page") || "6";

    if (!endpoint) {
      grid.innerHTML = '<p class="greenline-portfolio-grid__error">Portfolio API endpoint is not available.</p>';
      return;
    }

    fetch(endpoint + "?per_page=" + encodeURIComponent(perPage))
      .then(function (response) {
        if (!response.ok) {
          throw new Error("API request failed");
        }
        return response.json();
      })
      .then(function (data) {
        if (!data.projects || !data.projects.length) {
          grid.innerHTML = '<p class="greenline-portfolio-grid__empty">No portfolio projects have been published yet.</p>';
          return;
        }

        grid.innerHTML = data.projects.map(renderProject).join("");
      })
      .catch(function () {
        grid.innerHTML = '<p class="greenline-portfolio-grid__error">Portfolio projects could not be loaded.</p>';
      });
  }

  document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".greenline-portfolio-grid").forEach(loadGrid);
  });
})();
