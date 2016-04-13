var logbook = document.getElementById('logbook');

function getLogbook(){

    AjaxGet('api/logbook.php/',"", function(data){
        logbook.value = data;
    });

}

function update(){

    var updatedLogbook = logbook.value;
    AjaxGet('api/updateLogbook.php/','?logbook=' + updatedLogbook, function(data){});

}

logbook.addEventListener("keyup", update);
window.onload = getLogbook;