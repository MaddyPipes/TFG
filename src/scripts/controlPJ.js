$(document).ready(function () {
    $(".seleccionarPJ").click(function () {
        let personajeID = $(this).attr("id");
        $("#listaPJ").addClass("d-none");
        $("#cartaPJ" + personajeID).removeClass("d-none");

        $.ajax({
            url: "../controller/controlStats.php",
            type: "POST",
            data: { id: personajeID },
            success: function (response) {

                console.log(response);
                
                let jsonPJ = {
                    "nombre": response.NOMBRE
                }


            },
            error: function () {
                console.log("Error al obtener los parámetros desde el servidor.");
            }
        });
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
                    $("#listaPJ").removeClass("d-none");
                    $("#cartaPJ" + personajeID).addClass("d-none");
                    $("#recuadroPJ" + personajeID).addClass("d-none");
                } else {
                    alert("Hubo un error al eliminar el elemento." + personajeID + response);
                }
            },
            error: function () {
                alert("Hubo un error en la comunicación con el servidor.");
            }

        });
    })

});
