<?php

// Database connection file
include __DIR__. '/config.php';

$dsn = 'mysql:host='.DBHOST;

try {

    $dbh = new PDO($dsn . ';dbname=' . DBNAME, DBUSER, DBPASS);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $failure) {

    echo 'Connection failed: ' . $failure->getMessage();

}


?>
