$('document').ready(function () {
    /* validation */
    $("#form-signin").validate({
        rules: {
            password: {
                required: true
            },
            username: {
                required: true
            }
        },
        messages: {
            password: {
                required: "please enter your password"
            },
            username: "please enter your username"
        },
        submitHandler: submitForm
    });


    /* login submit */
    function submitForm() {
        var data = $("#form-signin").serialize();
        console.log(data);
        $.ajax({
            type: 'POST',
            url: '/login',
            data: data,
            beforeSend: function () {
                $("#admin-enter").html('<span>sending...</span> ');
            },
            success: function (response) {
                console.log(response);
                if (response) {
                    $('#form-signin').trigger("reset");
                    $("#admin-enter").html('Signing In ...');
                    $("#error").html('<span>Welcome admin!</span>');

                    window.location.href = '/adminpanel';
                    // console.log(window.location.href);
                }
                else {
                    $("#error").fadeIn(1000, function () {
                        $("#error").html('<span>Не верен логин или пароль!</span>');
                        $("#admin-enter").html('<span >Enter</span>');

                    });
                }
            }
        });
        return false;
    }

    $('admin-enter').on("click", function (e) {
        e.preventDefault();
        submitForm();
    });

});