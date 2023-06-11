$(document).ready(function() {
    $(".seleccionarPJ").click(function() {
      let personajeID = $(this).attr("id");
      $("#listaPJ").addClass("d-none");
      $("#div" + personajeID).removeClass("d-none");
    });
  });