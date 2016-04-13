<?php

include __DIR__.'/../inc/all.php';

    $question = $_GET['question'];
    $details = $_GET['details'];
    $id = $_GET['id'];

    $query = $dbh->prepare("INSERT INTO `Question`(`userID`, `question`, `detail`) VALUES ('$id', '$question', '$details')");
    $query->execute();

    include __DIR__.'/getPosts.php';


?>