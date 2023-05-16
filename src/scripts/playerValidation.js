//Script que validará el formulario de la vista formularioJugador usando la librería de validación de jQuery

$(document).ready(function () {

    $('#formularioJugador').validate({
        errorClass: "error fail-alert",
        validClass: "valid success-alert",
        rules: {
            nombre: {
                required: true,
                pattern: /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/
            },
            localidad: {
                required: true,
                pattern: /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/
            },
            genero: {
                required: true
            },
            edad: {
                required: true
            }
        },
        messages: {
            nombre: {
                required: "Este campo no puede quedar vacío.",
                pattern: "¡No están permitidos los carácteres especiales!"
            },
            localidad: {
                required: "Este campo no puede quedar vacío.",
                pattern: "¡No están permitidos los carácteres especiales!"
            },
            genero: {
                required: "Este campo no puede quedar vacío."
            },
            edad: {
                required: "Este campo no puede quedar vacío."
            }
        }
    });

});

