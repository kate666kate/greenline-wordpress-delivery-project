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

    if (!phoneLink) {
      return;
    }

    pushEvent({
      event: "phone_click",
      event_source: "phone_link",
      link_url: phoneLink.getAttribute("href")
    });
  });
})();
