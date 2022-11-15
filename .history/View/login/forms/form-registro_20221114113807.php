
<form>
    <!--  Creación de una fila con dos columnas. La primera columna es para el nombre y la segunda
           columna es para el apellido. * -->

    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="form-outline">
                <input type="text" id="form3Example1" class="form-control" />
                <label class="form-label" for="form3Example1">Nombre</label>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="form-outline">
                <input type="text" id="form3Example2" class="form-control" />
                <label class="form-label" for="form3Example2">Nombre de Usuario</label>
            </div>
        </div>
    </div>

    <!-- /*  Entrada de correo electrónico. */ -->
    <div class="form-outline mb-4">
        <input type="email" id="form3Example3" class="form-control" />
        <label class="form-label" for="form3Example3">Email </label>
    </div>

    <!-- /* El usuario ingresar una contraseña. */ -->
    <div class="form-outline mb-4">
        <input type="password" id="form3Example4" class="form-control" />
        <label class="form-label" for="form3Example4">Contraseña</label>
    </div>

  

    <!-- /* Botón de envío. */ -->
    <button type="submit" class="btn btn-primary btn-block mb-4">
        Enviar
    </button>

    <div class="text-center">
        <p>Registrarme con:</p>
        <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-facebook-f"></i>
        </button>

        <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-google"></i>
        </button>

        <button type="button" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-twitter"></i>
        </button>

        <button type="button" onclick="" class="btn btn-link btn-floating mx-1">
            <i class="fab fa-github"></i>
        </button>
        <p class="font-weight-light">He olvidado mi Contraseña.<a href="recuperar.php">Recuperar Contraseña.</a><br> 
        <a href="login.php">Ya tengo una Cuenta</a>
    </p>

    </div>
</form>