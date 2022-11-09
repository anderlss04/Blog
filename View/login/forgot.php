<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../../View/components/scripts.php'; ?>
    <link rel="stylesheet" href="../../src/css/login.css">
    <link rel="stylesheet" href="../../src/css/styles.css">
    <script src="../../src/js/login.js"></script>

    <title>Document</title>
</head>

<body>

    <main>
        <div class="container d-flex justify-content-center align-items-center h-100">

            <div class="content w-50">
                <div class="w-100 p-5">
                    <h1 class="text-center">Resgistrarse</h1>
                    <form class="login" action="" Method="">
                        <div class="form-group">
                            <label for="name">Nombre de Usuario</label>
                            <input id="name" name="name" type="text" aria-describedby="nameHelpBlock"
                                required="required" class="form-control">
                            <span id="nameHelpBlock" class="form-text text-muted">Escribe un nombre de Usuario</span>
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input id="email" name="email" type="text" aria-describedby="emailHelpBlock"
                                required="required" class="form-control">
                            <span id="emailHelpBlock" class="form-text text-muted">Escribe un correo electronico</span>
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input id="password" name="password" type="text" aria-describedby="passwordHelpBlock"
                                required="required" class="form-control">
                            <span id="passwordHelpBlock" class="form-text text-muted">Ecribe una contraseña</span>
                        </div>
                        <div class="form-group text-center p-2">
                            <button name="submit" type="submit" class="btn  boton">Registrarse</button>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </main>

</body>

</html>