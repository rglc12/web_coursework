<?php

/*error with row count*/

include __DIR__.'/../inc/all.php';

    $username = $_GET['username'];
    $password = $_GET['password'];

    $query = $dbh->prepare("SELECT * FROM User WHERE username = '$username' AND password = '$password'");
    $query->execute();
    $result = $query->fetch();
    if ($result->rowCount() == 1) {
        header("Location: feed.html");
        return;
    } else {
        echo "Boo user... boo you dirty user!";
    }

?>