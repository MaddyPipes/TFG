$(document).ready(function () {
    $(".seleccionarPJ").click(function () {
        let personajeID = $(this).attr("id");
        $("#listaPJ").addClass("d-none");
        $("#cartaPJ" + personajeID).removeClass("d-none");
    });

    $(".deseleccionar").click(function () {
        let personajeID = $(this).attr("id");
        personajeID = personajeID.substring(15);
        $("#listaPJ").removeClass("d-none");
        $("#cartaPJ" + personajeID).addClass("d-none");
    })
});
