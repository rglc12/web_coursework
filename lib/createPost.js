var post = document.getElementById('post');
var question = document.getElementById('question');
var details = document.getElementById('details');

function addPost (){

    question = question.value;
    details = details.value;

    AjaxGet('api/addPosts.php/','?question=' + question + '&details=' + details, function(data){
        results.innerHTML = data;
    });

    question.value = "";
    details.value = "";
}

post.addEventListener('click', addPost);