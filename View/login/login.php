<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "../../View/components/scripts.php" ?>
    <link rel="stylesheet" href="../../src/css/login.css">
    <link rel="stylesheet" href="../../src/css/styles.css">
    <script src="../../src/js/login.js"></script>

    <title>Document</title>
</head>
<body>

<main>
<div class="container d-flex justify-content-center align-items-center h-100">
    
    <div class="content w-50" >
        <div class="w-100 p-5">
               <h1 class="text-center">LOG IN </h1>
            <form action="M_login.php" method="POST">
              <div class="form-group p-3">
                <label for="text">Usuario</label> 
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fa fa-user"></i>
                    </div>
                  </div> 
                  <input id="text" name="text" type="text" aria-describedby="textHelpBlock" required="required" class="form-control">
                </div> 
                <span id="textHelpBlock" class="form-text text-muted">escribe tu usuario o correo electrónico</span>
              </div>
              <div class="form-group p-3">
                <label for="pass">contraseña</label> 
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fa fa-unlock-alt"></i>
                    </div>
                  </div> 
                  <input id="pass" name="pass" type="text" class="form-control" aria-describedby="passHelpBlock" required="required">
                </div> 
                <span id="passHelpBlock" class="form-text text-muted">Ingresa tu contraseña</span>
              </div> 
              <div class="form-group text-center">
                <button name="submit" type="submit" class="btn btn-primary">Entrar</button>
              </div>
            </form>
        </div>
    </div>
</div>
</main>

</body>
</html>