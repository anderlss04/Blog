<?php

use Model\M_Posts;
use Model\Posts;

require_once('../Model/Posts.php');
require_once('../Model/M_Posts.php');

$con = new M_Posts();

$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$created_at = $_POST['created_at'];
$updated_at = $_POST['updated_at'];
$author = $_POST['author'];
$active = $_POST['active'];



?>