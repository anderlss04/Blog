
<form>
 
    <div class="form-outline mb-4">
        <input type="text" id="formUsername" class="form-control" />
        <label class="form-label" for="formUsername">Email o Nombre de Usuario </label>
    </div>

    <div class="form-outline mb-4">
        <input type="password" id="formPassWord" class="form-control" />
        <label class="form-label" for="formPassWord">Contraseña</label>
    </div>

    <div class="form-check d-flex justify-content-center mb-4">
        <input class="form-check-input me-2" type="checkbox" value="" id="formRecordar" checked />
        <label class="form-check-label" for="formRecordar">
            Desea que su usuario sea recordado
        </label>
    </div>

    <button type="submit" class="btn btn-primary btn-block mb-4">
        Enviar
    </button>

    <div class="text-center">
        <p class="font-weight-light">He olvidado mi Contraseña.<a href="recuperar.php">Recuperar Contraseña.</a><br> 
        <a href="registrarse.php">Registrarme</a>
    </p>
    </div>
</form>