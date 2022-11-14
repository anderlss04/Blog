<?php require 'view/components/header.php'; ?>
<?php
require 'Controllers/RutasController.php';
$valor = $intancia->rutaLinks($escaped_link, '');
include $valor[0]['script'];
?>

<head>
    <link rel="stylesheet" href="src/css/portada.css">
</head>
<!-- // $valor = $intancia->rutaLinks($escaped_link, 'view/components/user/nav.php'); -->
<?php
include 'view/components/user/nav.php';
include 'view/components/user/main.php';
?>

<?php require 'view/components/footer.php'; ?>