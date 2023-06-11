$(document).ready(function() {
    $(".seleccionarPJ").click(function() {
      let personajeID = $(this).attr("id");
      $("#listaPJ").addClass("d-none");
      $("cartaPJ" + personajeID).removeClass("d-none");
    });
  });