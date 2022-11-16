<?php require 'Controller/ver/C_Ver_Usuario_Post.php';
$image = $intancia->RutaLinks($escaped_link, 'src/images/default.jpg');
$form = $intancia->RutaLinks($escaped_link, 'View/login/forms/portada.php');

$vista = $intancia->RutaLinks(
    $escaped_link,
    'View/users/perfilUser.php'
);

?>
<div id='content-rigth' class='per p-2 w-100 d-flex align-items-center'>

    <?php if (isset($_SESSION['user']) && isset($_SESSION['user'] )!= null) { ?>
  <?php $var = $intancia->RutaLinks($escaped_link, 'Controller/ver/C_Ver_Usuario-log.php');
include $var[0]['ruta'];
?>

<form class="form-slider text-center">
<div class="img-fluid img-intro ">
    <img src="src/images/prueba.jpg" alt="">
</div>   
<div class="card p-4 mx-3">
     <div class="row">
         <div class="col-md-12 mb-4">
             <div class="form-outline">
                 <input readonly value="<?php echo $username; ?>" type="text" id="formNombre" name="first_name" class="form-control" />
                 <label class="form-label" for="formNombre">Nombre</label>
             </div>
         </div>
         <div class="col-md-12 mb-4">
             <div class="form-outline">
                 <input readonly value="<?php echo $email; ?>" type="text" id="formApellido" name="last_name" class="form-control" />
                 <label class="form-label" for="formApellido">Apellido</label>
             </div>
         </div>
     </div>
    
     <div class="row">
         <div class="col-md-4 mb-4">
             <div class="form-outline">
                 <input readonly value="<?php echo $username; ?>" readonly type="text" id="formUserName" name="username" class="form-control" />
                 <label class="form-label" for="formUserName">Nombre de Usuario</label>
             </div>
         </div>
         <div class="col-md-8 mb-4">
             <div class="form-outline">
                 <input readonly value="<?php echo $email; ?>" type="email" id="formEmail" name="email" class="form-control" />
                 <label class="form-label" for="formEmail">Email </label>
             </div>
         </div>
     </div>
    
    
    
    
    
     <!-- /* Botón de envío. */ -->
     <a type="submit" href="<?php echo $vista[0]['ruta'] ?>" class="boton btn  btn-block mb-4">
         ver
     </a>
   </div>

    
</form>
    <?php } else { ?>
    <div class='form-logs container  mb-4  d-flex justify-content-center'>
        <div class='card p-4 text-center'>
            <h1>Entrar</h1>
            <?php require $form[0]['ruta']; ?>

        </div>
    </div>

    <?php } ?>

</div>


<?php if (isset($id)) {
    $usuario = $user->getPost($id);
}
?>