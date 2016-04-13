<?php

/*
    File for drawing and displaying data from the database.
    the foreach loop contains the template of how the data is presented.
*/

include __DIR__.'/../inc/all.php';

    try {
        if (!empty($_GET['SearchQuestion'])) {

            //'SearchQuestion' should contain the string from the search bar
            $searchQuery = $_GET['SearchQuestion'];

            $query = $dbh->prepare("SELECT * FROM Question WHERE question LIKE '%$searchQuery%' ORDER BY created DESC");
            $query->execute();
            $result = $query->fetchAll();

            foreach ($result as $row) {
                echo '<div class="post">';
                echo '<p class="post-heading">' . $row["question"] . '</p>';
                echo '<p class="post-details">' . $row["detail"] . '</p>';
                echo '<div class="post-lower">';
                echo '<p class="post-lower">Created on ' . $row["created"] . '</p>';
                echo '<p class="post-reply">(x)Replies</p>';
                echo '</div>';
                echo '</div>';
            }
        } else {

            //Show all posts if search bar is empty

            $query = $dbh->prepare("SELECT * FROM Question ORDER BY created DESC");
            $query->execute();
            $result = $query->fetchAll();

            foreach ($result as $row) {
                echo '<div class="post">';
                echo '<p class="post-heading">' . $row["question"] . '</p>';
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