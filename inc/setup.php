<?php

include __DIR__ . '/config.php';

// CONNECT TO THE DATABASE SERVER
    $dsn = "mysql:host=".DBHOST.";dbname=".DBNAME.";";
    $option = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_PERSISTENT => true
    );

    try {
        $con = new PDO($dsn, DBUSER, DBPASS, $option);
        $con->query("use ".DBNAME);
    } catch (PDOException $failure) {
        DB::throwException("Failed to connect to database");
    }

    try {
        $con = new PDO($dsn, DBUSER, DBPASS, $option);
        $con->exec(DBTABLES);
    } catch (PDOException $failure) {
        DB::throwException("Failed to create tables for database");
    }
?>