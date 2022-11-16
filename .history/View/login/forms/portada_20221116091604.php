<?php
$var = $intancia->RutaLinks($escaped_link, 'Controller/Login.php');
// $var2 = $intancia->RutaLinks($escaped_link, '../Controller/Login.php');
?>
<?php $enlace1 = $intancia->RutaLinks(
    $escaped_link,
    'View/login/recuperar.php'
); ?>
<?php $enlace2 = $intancia->RutaLinks($escaped_link, 'View/login/recuperar.php'); ?>

<form action="<?php echo $var[0]['ruta']; ?> " method="POST">

    <div class="form-outline mb-4">
        <input type="text" id="formUsername" name="nombre" class="form-control" />
        <label class="form-label" for="formUsername">Email o Nombre de Usuario </label>
    </div>

    <div class="form-outline mb-4">
        <input type="password" name="pass" id="formPassWord" class="form-control" />
        <label class="form-label" for="formPassWord">Contraseña</label>
    </div>



    <input type="submit" class="boton btn-block mb-4" value="Enviar" />

    <div class="text-center">
        <!-- <p class="font-weight-light">He olvidado mi Contraseña.<a href=" <?php echo $enlace1[0][
            'ruta'
        ]; ?>">Recuperar Contraseña.</a><br> -->
            <a href="<?php echo $enlace2[0]['ruta']; ?>">Registrarme</a>
        </p>
    </div>
</form>