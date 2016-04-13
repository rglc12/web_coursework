<?php

include __DIR__.'/../inc/all.php';

$regUsername = $_GET['regUsername'];
$regPassword = $_GET['regPassword'];

$query = $dbh->prepare("INSERT INTO `User`(`username`, `password`) VALUES ('$regUsername', '$regPassword')");
$query->execute();

?>