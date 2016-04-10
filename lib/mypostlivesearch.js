var results = document.getElementById('results');

AjaxGet('api/getMyPosts.php/','?SearchQuestion= ', function(data){
    results.innerHTML = data;
});

// AjaxGet function to help with loading getPosts.php

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


/*
 Uses Ajax to try and call getPosts.php and display the posts in the <div id="results">
 in feed.html
 */

function liveResults(){
    var searchBarInput = search.value;
    AjaxGet('api/getMyPosts.php','?SearchQuestion=' + searchBarInput, function(data){
        results.innerHTML = data;
    });
}

search.addEventListener("keyup", liveResults);
