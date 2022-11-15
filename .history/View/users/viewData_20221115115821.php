<h1 class="w-100 text-center">Mis datos</h1>

<form action="<?php echo $var[0]['ruta'] ?> " method="POST" class="text-center">
    <!--  Creación de una fila con dos columnas. La primera columna es para el nombre y la segunda
           columna es para el apellido. * -->
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="form-outline">
                <input value="<?php echo $first_name; ?>" type="text" id="formNombre" name="first_name" class="form-control" />
                <label class="form-label" for="formNombre">Nombre</label>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="form-outline">
                <input value="<?php echo $last_name; ?>" type="text" id="formApellido" name="last_name" class="form-control" />
                <label class="form-label" for="formApellido">Apellido</label>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="form-outline">
                <input value="<?php echo $username; ?>" readonly type="text" id="formUserName" name="username" class="form-control" />
                <label class="form-label" for="formUserName">Nombre de Usuario</label>
            </div>
        </div>
        <div class="col-md-8 mb-4">
            <div class="form-outline">
                <input value="<?php echo $email; ?>" type="email" id="formEmail" name="email" class="form-control" />
                <label class="form-label" for="formEmail">Email </label>
            </div>
        </div>
    </div>



    <!-- /* El usuario ingresar una contraseña. */ -->
    <div class="form-outline mb-4">
        <input value="<?php echo $password; ?>" type="password" id="formPass" name="password" class="form-control" />
        <label class="form-label" for="formPass">Contraseña</label>
    </div>


    <!-- /* Botón de envío. */ -->
    <button type="submit" class="boton btn  btn-block mb-4">
        Editar
    </button>

    
</form>