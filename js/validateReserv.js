$().ready(function() {
    $.validator.addMethod(
      "pattern",
      function(value, element, regexp) {
        var re = new RegExp(regexp);
        return this.optional(element) || re.test(value);
      },
      "Please check your input."
    );
    $("#formReservacion").validate({
        rules: {
            nombre: {
                required: true,
                minlength: 10,
                maxlength: 100
            },
            correo: {
                required: true,
                minlength: 10,
                maxlength: 100,
                email:true
            },
            correocon: {
                required: true,
                equalTo: "#correo"
            },
            telefono: {
                required: true,
                number: true,
                maxlength: 12
            },
            date_rsv: {
                required: true
            },
            time_rsv: {
                required: true
            },
            comensales: {
                required: true,
                number: true,
                min: 1,
                max: 20
            },
            demandas: {
                maxlength: 65000
            },
            terms: "required"
        },
        messages: {
            nombre: {
                required: "Por favor llene este campo",
                minlength: "El campo debe tener al menos 10 caracteres",
                maxlength: "El campo no debe tener más de 100 caracteres",
                pattern: "Sólo se aceptan letras y espacios"
            },
            correo: {
                required: "Por favor escriba su correo",
                minlength: "Este campo debe tener al menos 10 caracteres",
                maxlength: "El correo no puede ser de más de 100 caracteres",
                email: "Introduzca un correo válido"
            },
            telefono: {
                required: "Por favor adjunte su teléfono",
                number: "Este campo solo admite números",
                maxlength: "El campo no puede exceder 12 caracteres"
            },
            date_rsv: {
                required: "Este campo es obligatorio",
                min: "La fecha no puede ser anterior al día de hoy",
                max: "No se permiten reservaciones en más de dos semanas"
            },
            time_rsv: {
                required: true,
                min: "Nuestro local abre a las 12:00 P.M.",
                max: "La hora elegida pasa la hora de cierre."
            },
            correocon: {
                required: "Confirme su correo, por favor",
                equalTo: "El correo no coincide"
            },
            comensales: {
                required: "Este campo es obligatorio",
                number: "Este campo debe ser numérico",
                min: "Por lo menos 1 comensal",
                max: "No más de 20 comensales"
            },
            demandas: {
                required: "Este campo es obligatorio",
                maxlength: "Este campo no puede tener más de 65,000",
                pattern: "Este campo sólo admite letras y espacios"
            },
            terms: "Campo obligatorio"
        }
    });
    $("#nombre").rules("add", { pattern: /^[A-zÀ-ú ]+$/ });
    $("#demandas").rules("add", { pattern: /^[A-zÀ-ú ]+$/ });

});