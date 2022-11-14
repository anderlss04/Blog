<?php

$link = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$escaped_link = htmlspecialchars($link, ENT_QUOTES, 'UTF-8');
$nuevo = explode('/',$escaped_link);
echo '<a href="'.$escaped_link.'">'.$escaped_link.'</a>';

?>