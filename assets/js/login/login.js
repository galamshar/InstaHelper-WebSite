const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');
isLogged();

signUpButton.addEventListener('click', () => {
    container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
    container.classList.remove("right-panel-active");
});

function loginSubmit() {
    var data = $("#login-form").serialize();
    $.ajax({
        type: "POST",
        url: "../actions/login.php",
        data: data,
        dataType: "json",
        success: function (response) {
            if (response.success == 'true') {
                window.location.href = '../dashboard/index.php';
            } else {
                $('#login-errormsg').text(response.error);
            }
        }
    })
}

function registerSubmit() {
    var data = $("#registerform").serialize();
    $.ajax({
        type: "POST",
        url: "../actions/register.php",
        data: data,
        dataType: "json",
        headers: "Content-Type: application/json",
        success: function (response) {
            if (response.success == 'true') {
                window.location.href = '../../../index.php';
            } else {
                $('#register-errormsg').text(response.error);
            }
        }
    })
}

function isLogged() {
    $.ajax({
        type: "GET",
        url: "../actions/user/loginned.php",
        dataType: "json",
        success: function (response) {
            if (response.loggedIn == "true") {
                window.location.href = '../dashboard/index.php'
                return true;
            }
            return false;
        }
    })
}