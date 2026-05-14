(function () {
  function pushLeadEvent(formId) {
    window.dataLayer = window.dataLayer || [];
    window.dataLayer.push({
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
})();
