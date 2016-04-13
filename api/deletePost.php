<?php

include __DIR__.'/../inc/all.php';

$postID = $_GET['id'];

$checkReply = $dbh->prepare("DELETE FROM Reply WHERE questionID = '$postID'");
$checkReply-> execute();

$checkQuestion = $dbh->prepare("DELETE FROM Question WHERE id = '$postID'");
$checkQuestion-> execute();

include __DIR__.'/getMyPosts.php';

?>
