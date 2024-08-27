$(document).ready(function() {
  $(".navlink").click(function(event) {
      event.preventDefault();
      var section = $(this).data("section");
      loadContent(section);
  });

  function loadContent(section) {
    var file = section + ".txt"
      $("#content").load(file);
  }
});
