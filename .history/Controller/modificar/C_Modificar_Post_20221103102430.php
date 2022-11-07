<?php

use Model\M_Posts;
use Model\Posts;

require_once('../Model/Posts.php');
require_once('../Model/M_Posts.php');

$con = new M_Posts();

$id = $_POST['id'];
$title = $_POST['title'];



$post = new Posts($id, $title, $description, $created_at, $updated_at, $author, $active);

$con->modPost($post);

header("Location: ../View/posts.php");

?>