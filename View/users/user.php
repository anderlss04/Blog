<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil Usuario</title>
    <link rel="stylesheet" href="../../src/css/user.css">
    <?php require "../components/scripts.php" ?>
</head>

<body>



    <?php $datos = unserialize($_GET["data"]);
    //   var_dump($datos);
          foreach($datos as $dato){
            echo $dato["username"];
            echo $dato["email"];
          }
    
    
    ?>


    <header>
        <?php require "../components/cabecera.php" ?>
    </header>
    <main>
    </main>

    <footer>
    </footer>

</body>

</html>