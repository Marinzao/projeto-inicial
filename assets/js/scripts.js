$(document).ready(function () {
    $('input').focus(function () {
        $(this).parents('.form-group').addClass('focused');
    });

    $('input').blur(function () {
        var inputValue = $(this).val();
        if (inputValue == "") {
            $(this).removeClass('filled');
            $(this).parents('.form-group').removeClass('focused');
        } else {
            $(this).addClass('filled');
        }
    })
    $('#eye_password').click(function () {
        let x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
            $('#icon_eye_pass').addClass('fa-eye-slash');
            $('#icon_eye_pass').removeClass('fa-eye');
        } else {
            x.type = "password";
            $('#icon_eye_pass').addClass('fa-eye');
            $('#icon_eye_pass').addClass('fa-eye-slash');
        }
    })
})
