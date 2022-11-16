<?php 
require 'view/components/header.php';
require 'Controllers/RutasController.php'; 

session_start();
if(isset($_SESSION['user'])){
    $valor = $intancia->rutaLinks($escaped_link, 'View/users/datosPortal.php');
   
    
}
?>


<?php 
$valor = $intancia->rutaLinks($escaped_link, '');
include $valor[0]['script'];
?>

<head>
    <link rel="stylesheet" href="src/css/portada.css">
</head>

<?php
// $valor = $intancia->rutaLinks($escaped_link, 'view/components/user/nav.php');
include 'view/components/user/nav.php';
include 'view/components/user/main.php';
?>
    <script src="src/js/main.js"></script>


<?php require 'view/components/footer.php' ?>

<script>
   document.getElementById("botonComments").addEventListener("click", function(){
    document.getElementById("ComentModal").style.display = "block";
    document.getElementById("form-entrar").style.display = "none";
   });
</script>