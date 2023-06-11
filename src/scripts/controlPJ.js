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

    $(".botonBorrar").click(function () {
        let personajeID = $(this).attr("id");
        personajeID = personajeID.substring(8);

        $.ajax({
            url: "../controller/borrarPersonaje.php",
            type: "POST",
            data: { id: personajeID },
            success: function (response) {
                if (response === "success") {
                    alert("El elemento se ha eliminado correctamente.");
                } else {
                    alert("Hubo un error al eliminar el elemento.");
                }
            },
            error: function () {
                alert("Hubo un error en la comunicación con el servidor.");
            }
        });
    })
});
