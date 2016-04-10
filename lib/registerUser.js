var reg = document.getElementById('Reg');
var regTitle = document.getElementById('regTitle');
var regUsername = document.getElementById('RegUsername');
var regPassword = document.getElementById('RegPassword');

function register (){

    regUsername = regUsername.value;
    regPassword = regPassword.value;

    AjaxGet('api/register.php/','?regUsername=' + regUsername + '&regPassword=' + regPassword , function(data){});

    regUsername.value = " ";
    regPassword.value = " ";

    regTitle.innerHTML = regTitle.innerHTML + " - YOU HAVE REGISTERED! LOGIN NOW!";

}

reg.addEventListener('click', register);