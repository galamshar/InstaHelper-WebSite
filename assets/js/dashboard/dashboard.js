var activated = null;
var globalResponse = null;
isLogged();
activate('accounts')

function isLogged() {
    $.ajax({
        type: "GET",
        url: "../actions/user/loginned.php",
        dataType: "json",
        success: function (response) {
            if (response.loggedIn == "true") {
                getInfo();
                return true;
            }
            window.location.href = '../login/index.php'
            return false;
        }
    })
}

function activate(value) {
    if (value != activated) {
        $('#' + value).addClass("active");
        $('#' + activated).removeClass("active");
        activated = value;
        $.get(value + '.php', function (data) {
            $('#maincontent').html(data);
        });
    }
}

function change() {
    if (activated == "settings") {
        $('#user-name').text(globalResponse.username);
        $('#user-id').text(globalResponse.id);
        $('#user-email').text(globalResponse.email);
        $('#user-role').text(globalResponse.role);
        $('#sub-type').text(globalResponse.subtype);
    } else if (activated == "upgrade") {
        $(".buyed").hide();
        if (globalResponse.subtype == "Basic") {
            $('#basic').hide();
        } else if (globalResponse.subtype == "Pro") {
            $(".blocks").hide();
            $(".buyed").show();
        }
    }
}

function getInfo() {
    $.ajax({
        type: "GET",
        url: "../actions/user/about.php",
        dataType: "json",
        success: function (response) {
            globalResponse = response;
            $('#username').text(response.username);
            $('#subtype').text(response.subtype);
        }
    })
}

function changePwd() {
    var data = $("#changepwd").serializeArray();
    if (data[1].value == data[2].value) {
        $.ajax({
            type: "POST",
            data: data,
            url: "../actions/user/pwdchange.php",
            dataType: "json",
            success: function (response) {
                if (response.success == 'true') {
                    $('#changepwd-errormsg').text("Changed successfully");
                } else {
                    $('#changepwd-errormsg').text(response.error);
                }
            }
        })
    }
}

function logout() {
    $.ajax({
        type: "GET",
        url: "../actions/user/logout.php",
        dataType: "json",
        success: function (response) {
            if (response.success == 'true'){
                window.location.href = '../login/index.php'
            } else {
                logout();
            }
        }
    })
}
