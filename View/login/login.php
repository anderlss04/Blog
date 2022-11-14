
<?php
include '../components/user/ObtenerRuta.php';
require '../../Controllers/RutasController.php';

$valor = $intancia->Vistas($escaped_link);
$titulo = $intancia->Titulos($escaped_link);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php  echo $titulo ?></title>
    <link rel="stylesheet" href="../../src/styles/login.css">
   <?php include '../components/scripts/links.php' ?>
</head>
<body>

<section class="text-center text-lg-start">
  <div class="container py-4">
    <div class="row g-0 align-items-center">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="card cascading-right formulario" >
          <div class="card-body p-5 shadow-5 text-center">
            <h2 class="fw-bold mb-5"><?php  echo strtoupper($titulo) ?> </h2>
            <!-- <?php  //include "forms/portada.php" ?> -->
            <?php include getcwd().$valor ;
            ?>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0">
        <img src="../../src/images/login/fondo_registrar.jpg" class="w-100 rounded-4 shadow-4"
          alt="" />
      </div>
    </div>
  </div>

</section>
</body>
</html>