<?php

    include __DIR__.'/../inc/all.php';

    try{

        $id = 1;
        
        $query = $dbh->prepare("SELECT logbook FROM Logbook WHERE userID = '$id' LIMIT 1");
        $query->execute();
        $results = $query->fetchAll();

        foreach ($results as $row){
            echo ''.$row["logbook"].'';
        }

    } catch(PDOException $e) {

        echo 'No logbook data';

    }


?>