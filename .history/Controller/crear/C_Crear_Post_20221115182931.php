<?php

use Model\M_Posts;
use Model\Posts;

require_once('../../Model/M_Posts.php');

$con = new M_Posts();

$title = $_POST['title'];
$brief = "";
$content = $_POST['contents'];
$image = $_FILES['image']['tmp_name'];
$created_at = date("Y-m-d");
$status = "1";
$user_id = $_POST['user_id'];

 
$image = addslashes(file_get_contents($image));

$post = new Posts($title, $brief, $content, $image, $created_at, $status, $user_id);

$con->insertPost($post);

header("Location: ../../View/users/perfilUser.php");

?>