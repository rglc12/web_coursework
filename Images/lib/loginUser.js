var log = document.getElementById('Login');
var username = document.getElementById('LogUsername');
var password = document.getElementById('LogPassword');

function login (){

    username = username.value;
    password = password.value;

    AjaxGet('api/login.php/','?username=' + username + '&password=' + password , function(data){});

}

log.addEventListener('click', login);