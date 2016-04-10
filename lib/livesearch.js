/*
    This function is for the search bar at the top of feed.php.
    This function should load the php file asynchronously (without re-loading the page)
    which loads the posts from the database (table name: Question).
    When the user types any string into the search bar, the posts should filter
    the posts and show all posts with matching string.
 */

var results = document.getElementById('results');

AjaxGet('api/getPosts.php/','?SearchQuestion= ', function(data){
    results.innerHTML = data;
});

/*
    Uses Ajax to try and call getPosts.php and display the posts in the <div id="results">
    in feed.html
 */

function liveResults(){
    var searchBarInput = search.value;
    AjaxGet('api/getPosts.php','?SearchQuestion=' + searchBarInput, function(data){
        results.innerHTML = data;
    });
}

search.addEventListener("keyup", liveResults);