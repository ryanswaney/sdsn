var HRTemplate = Handlebars.compile(jQuery('#evnt-template').html());

jQuery("#evnt").sheetrock({
  url: "https://docs.google.com/spreadsheets/d/1L55uQxhdY7fmtny3-mMAR7ieOQ-ltroGDdyGUwSuEHE/edit?ts=58763900#gid=0",
  query: "select A,D,E,F,G,H,I,J where K = 'Y'",
  rowTemplate: HRTemplate
});
