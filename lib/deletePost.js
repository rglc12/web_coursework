function deletePost(id){

    AjaxGet('api/deletePost.php/','?id=' + id, function(data){
        results.innerHTML = data;
    });

}
