<?php

    include __DIR__.'/../inc/all.php';

    try{

        $id = 1;
        $logbook = $_GET['logbook'];

        $createLogbook = $dbh->prepare("INSERT IGNORE INTO `Logbook`(`userID`, `logbook`) VALUES ('$id', '$logbook')");
        $createLogbook->execute();

        $query = $dbh->prepare("UPDATE Logbook SET logbook = '$logbook' WHERE userID = '$id'");
        $query->execute();

    } catch(PDOException $e) {

        echo 'No logbook data';

    }

?>