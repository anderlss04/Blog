<?php

use Model\M_Comments;
require_once('../Model/M_Comments.php');

$con = new M_Comments();

$con->deleteComment($_POST['id']);

$con->close();

header('Location: ../Controller/ver/C_Ver_Comments.php');

?>