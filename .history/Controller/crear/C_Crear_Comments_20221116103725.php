<?php

use Model\M_Comments;
use Model\Comments;

require_once('../Model/Comments.php');
require_once('../Model/M_Comments.php');

$con = new M_Comments();

$name = $_POST['name'];
$comment = $_POST['comment'];
$email = "";
$post_id = $_POST['post_id'];
$created_at = date("Y-m-d-H-i-s");
$status = 0;

$comment = new Comments( $name, $comment, $email, $post_id, $created_at, $status);

$con->insertComment($comment);

header("Location:../../inde");

?>