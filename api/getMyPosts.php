<?php

include __DIR__.'/../inc/all.php';

try {
    if (!empty($_GET['SearchQuestion'])) {

        //'SearchQuestion' should contain the string from the search bar
        $searchQuery = $_GET['SearchQuestion'];
        $id = $_SESSION['id'];

        $query = $dbh->prepare("SELECT * FROM Question WHERE userID = '$id' AND question LIKE '%$searchQuery%' OR detail LIKE '%$searchQuery%' ORDER BY created DESC");
        $query->execute();
        $result = $query->fetchAll();

        foreach ($result as $row) {
            echo '<div class="post">';
            echo '<div class="post-heading">';
            echo '<p class="post-question">' . $row["question"] . '</p>';
            echo '<a class="post-reply" onclick="editPost('.$row["id"].')">Edit</a>';
            echo '<a class="post-reply" onclick="deletePost('.$row["id"].')">Delete</a>';
            echo '</div>';
            echo '<p class="post-details">' . $row["detail"] . '</p>';
            echo '<div class="post-lower">';
            echo '<p class="post-lower">Created on ' . $row["created"] . '</p>';
            echo '<p class="post-reply">(x)Replies</p>';
            echo '</div>';
            echo '</div>';
        }
    } else {

        //Show all posts if search bar is empty

        $query = $dbh->prepare("SELECT * FROM Question WHERE userID = '$id' ORDER BY created DESC");
        $query->execute();
        $result = $query->fetchAll();

        foreach ($result as $row) {
            echo '<div class="post">';
            echo '<div class="post-heading">';
            echo '<p class="post-question">' . $row["question"] . '</p>';
            echo '<a class="post-reply" onclick="editPost('.$row["id"].')">Edit</a>';
            echo '<a class="post-reply" onclick="deletePost('.$row["id"].')">Delete</a>';
            echo '</div>';
            echo '<p class="post-details">' . $row["detail"] . '</p>';
            echo '<div class="post-lower">';
            echo '<p class="post-lower">Created on ' . $row["created"] . '</p>';
            echo '<p class="post-reply">(x)Replies</p>';
            echo '</div>';
            echo '</div>';
        }
    }
}

catch(PDOException $e){
    echo 'No Posts available';
}

?>