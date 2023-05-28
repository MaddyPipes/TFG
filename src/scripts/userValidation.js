//Script que validará el formulario de la vista registroUsuario usando la librería de validación de jQuery

$(document).ready(function () {

    $('#registroUsuario').validate({

        //Establecemos clases que se añadan al input en caso de validación positiva o negativa (Para darle estilos)

        errorClass: "error fail-alert",
        validClass: "valid success-alert",

        //Establecemos las reglas que deberán seguir los campos

        rules: {
            nombre: {
                required: true,
                pattern: /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/
            },
            email: {
                required: true,
                email: true,
                pattern: /^[^\s@]+@[^\s@]+\.[^\s@]+$/
            },
            password: {
                required: true,
                minlength: 8,
                containsUppercase: true,
                containsNumber: true
            },
            passConfirm: {
                required: true,
                equalTo: '#password'
            }
        },

        //Establecemos los mensajes que aparecerán en caso de que se incumplan las reglas establecidas

        messages: {
            nombre: {
                required: "Este campo no puede quedar vacío.",
                pattern: "¡No están permitidos los carácteres especiales!"
            },
            email: {
                required: "Este campo no puede quedar vacío.",
                email: "¡Formato de email inválido!",
                pattern: "¡No están permitidos los carácteres especiales! Salvo la @ y el . claro"
            },
            password: {
                required: "Este campo no puede quedar vacío.",
                minlength: 'La contraseña debe tener al menos {0} caracteres.',
                containsUppercase: 'La contraseña debe contener al menos una letra en mayúscula.',
                containsNumber: 'La contraseña debe contener al menos un número.'

            },
            passConfirm: {
                required: "Este campo no puede quedar vacío.",
                equalTo: "¡Las contraseñas no coinciden!"
            }
        }
    });

    //Fuera del validador añadimos métodos adicionales para el formato de la contraseña

    $.validator.addMethod('containsUppercase', function(value) {
        return /[A-Z]/.test(value);
      }, 'La contraseña debe contener al menos una letra en mayúscula.');
    
      $.validator.addMethod('containsNumber', function(value) {
        return /[0-9]/.test(value);
      }, 'La contraseña debe contener al menos un número.');
});