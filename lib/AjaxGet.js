function AjaxGet(URL, data, callback) {

    var xhttp = new XMLHttpRequest();
    xhttp.open("GET", URL + data, true);
    xhttp.onreadystatechange = function() {
        if (xhttp.status == 200 && xhttp.readyState == 4) {
            callback(xhttp.responseText);
        }
    }
    xhttp.send(xhttp.responseText);
}
