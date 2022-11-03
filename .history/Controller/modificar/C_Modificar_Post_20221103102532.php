<?php

use Model\M_Posts;
use Model\Posts;

require_once('../Model/Posts.php');
require_once('../Model/M_Posts.php');

$con = new M_Posts();

$id = $_POST['id'];
$title = $_POST['title'];
$brief = $_POST['brief'];
$content = $_POST['content'];
$image = $_POST['image'];
$created_at = $_POST['created_at'];
$status = $_POST['status'];
$user_id = $_POST['user_id'];



$post = new Posts($id, $title, $description, $created_at, $updated_at, $author, $active);

$con->modPost($post);

header("Location: ../View/posts.php");

?>