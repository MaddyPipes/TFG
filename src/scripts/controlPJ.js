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

                let jsonPJ = {
                    "nombre": response.NOMBRE,
                    "raza": response.RAZA,
                    "clase": response.CLASE,
                    "nivel": response.NIVEL,
                    "ilustracion": response.ILUSTRACION,
                    "salvaciones": response.SALVACIONES,
                    "competencias": response.COMPETENCIAS,
                    "puntosGolpe": response.STAT1,
                    "claseArmadura": response.STAT2,
                    "fuerza": response.STAT3,
                    "constitucion": response.STAT4,
                    "destreza": response.STAT5,
                    "inteligencia": response.STAT6,
                    "sabiduria": response.STAT7,
                    "carisma": response.STAT8,
                    "idPersonaje": response.idPERSONAJE
                }

                let stringPJ = JSON.parse(jsonPJ);

                localStorage.setItem(response.NOMBRE, stringPJ);

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
