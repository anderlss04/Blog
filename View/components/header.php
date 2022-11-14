<?php

$link = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$escaped_link = htmlspecialchars($link, ENT_QUOTES, 'UTF-8');
$nuevo = explode('/',$escaped_link);
// $valor="";
// $valor = $intancia->rutaLinks($escaped_link);

echo '<a href="'.$escaped_link.'">'.$escaped_link.'</a>';

?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    