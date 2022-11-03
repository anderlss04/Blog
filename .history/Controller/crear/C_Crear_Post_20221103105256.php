<?php

use Model\M_Posts;
use Model\Posts;

require_once('../Model/Posts.php');
require_once('../Model/M_Posts.php');

$con = new M_Posts();

$title = $_POST['title'];
$brief = $_POST['brief'];
$content = $_POST['content'];
$image = $_POST['image'];
$created_at = date("Y-m-d");
$status = $_POST['status'];
$user_id = $_POST['user_id'];

$post = new Posts($title, $brief, $content, $image, $created_at, $status, $user_id);

$con->insertPost($post);

header("Location: ../View/crear/crear_post.php");

?>