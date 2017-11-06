var Login = function () {

    var handleLogin = function () {

        $('.login-form').validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            rules: {
                username: {
                    required: true
                },
                password: {
                    required: true
                }

            },

            messages: {
                username: {
                    required: "Se requiere nombre de usuario."
                },
                password: {
                    required: "Se requiere contraseña."
                }
            },

            invalidHandler: function (event, validator) { //display error alert on form submit   
                $('.alert-danger', $('.login-form')).show();
                $('#mensaje').html("Campos Vacios ");
            },

            highlight: function (element) { // hightlight error inputs
                $(element)
                        .closest('.form-group').addClass('has-error'); // set error class to the control group
            },

            success: function (label) {
                label.closest('.form-group').removeClass('has-error');
                label.remove();
            },

            errorPlacement: function (error, element) {
                error.insertAfter(element.closest('.input-icon'));
            },

            submitHandler: function (form) {
                // form.submit(); // form validation success, call ajax form submit
                ajaxpost();
            }
        });

        $('.login-form input').keypress(function (e) {
            if (e.which == 13) {
                if ($('.login-form').validate().form()) {
                    $('.login-form').submit(); //form validation success, call ajax form submit
                }
                return false;
            }
        });

        $('.forget-form input').keypress(function (e) {
            if (e.which == 13) {
                if ($('.forget-form').validate().form()) {
                    $('.forget-form').submit();
                }
                return false;
            }
        });

        $('#forget-password').click(function () {
            $('.login-form').hide();
            $('.forget-form').show();
        });

        $('#back-btn').click(function () {
            $('.login-form').show();
            $('.forget-form').hide();
        });
    }

    var ajaxpost = function () {
        // alert();
        var url = window.location.pathname + 'LoginWeb/login';

        $.ajax({
            type: 'POST',
            url: url,
            data: $("#formulario").serialize(),
            beforeSend: function () {

                $('.alert-info', $('.login-form')).show();

                $("#mensaje").html("Procesando, espere por favor...");


            },
            success: function (data, textStatus, jqXHR) {
                var content = JSON.parse(data);
                //console.log(content);
                alert(window.location.pathname + "home/");
             location.href = window.location.pathname + "home/";





            },
            error: function (jqXHR, textStatus, errorThrown) {
                // alert(errorThrown);
                alert(errorThrown);

            }


        });

    }


    return {
        //main function to initiate the module
        init: function () {

            handleLogin();

            var base = window.location.pathname;

            // init background slide images
            $('.login-bg').backstretch([
                base + "/assets/img/img1.jpg",
                base + "/assets/img/img2.jpg",
                base + "/assets/img/img3jpg"
            ], {
                fade: 600,
                duration: 8000
            }
            );

            $('.forget-form').hide();

        }

    };

}();

jQuery(document).ready(function () {
    Login.init();
});