<?php

use Model\M_Comments;
use Model\Comments;

require_once('../Model/Comments.php');
require_once('../Model/M_Comments.php');

$con = new M_Comments();

$name = $_POST['name'];
$comment = $_POST['comment'];
$email = $_POST['email'];
$post_id = $_POST[''];
$created_at = date("Y-m-d");
$status = 0;

$comment = new Comments( $name, $comment, $email, $post_id, $created_at, $status);

$con->insertComment($comment);

header("Location: ../View/comments.php");

?>