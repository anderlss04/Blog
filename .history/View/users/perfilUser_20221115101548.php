<<<<<<< HEAD
<?php
require '../../Controller/ver/C_Ver_Post_User.php';

require '../../View/components/header.php';
include '../../Controllers/RutasController.php';


require '../components/scripts/links.php'
?>
=======
    <link rel="stylesheet" href="../../src/css/user.css">
    <?php require '../components/scripts.php'; ?>
    <?php
    include '../components/user/ObtenerRuta.php';
    require '../../Controllers/RutasController.php';
    $valor = $intancia->Vistas($escaped_link);
    require '../../Controller/ver/C_Ver_Post_User.php';
    require '../../Controller/ver/C_Ver_Usuario.php';
    ?>
>>>>>>> b5ea6cb6ea9ff910bce8452099d21141eb50dd14

<head>
    <link rel="stylesheet" href="../../src/css/user.css">
</head>

<?php
$valor = $intancia->rutaLinks($escaped_link, 'components/posts.php');
?>
<script src="src/js/main.js"></script>


<?php require '../../View/components/footer.php' ?>

<div class="content-img W-100  d-flex justify-content-center align-items-center">
    <div class="content-img-inner d-flex justify-content-center align-items-center">
        <div class="img-perfil">
        </div>
    </div>
<<<<<<< HEAD
</div>
<div class="container w-100 h-100 d-flex justify-content-center flex-column align-items-center">
    <div class="options w-50 h-100">
        <div class="opcion">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                        type="button" role="tab" aria-controls="home" aria-selected="true">Datos Generales</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                        type="button" role="tab" aria-controls="profile" aria-selected="false">Publicaciones</button>
                </li>

            </ul>
        </div>
        <div class="tab-content " id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
=======
    <div class="container w-100 h-100 d-flex justify-content-center flex-column align-items-center">
        <div class="options w-50 h-100">
            <div class="opcion">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Datos Generales</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Publicaciones</button>
                    </li>
                    <?php if ($rol == 1) {
                        echo '<li class="nav-item" role="presentation">
                        <button class="nav-link" id="admin-tab" data-bs-toggle="tab" data-bs-target="#admin" type="button" role="tab" aria-controls="contact" aria-selected="false">Admin</button>
                    </li>';
                    } ?>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="logout-tab" data-bs-toggle="tab" data-bs-target="#logout" type="button" role="tab" aria-controls="contact" aria-selected="false">Logout</button>
                    </li>

                </ul>
            </div>
            <div class="tab-content " id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                    <div class="datos-perfil ">

                        <?php $var = $intancia->RutaLinks($escaped_link, "Controller/modificar/C_Modificar_Usuario.php")  ?>

                        <form action="<?php echo $var[0]['ruta'] ?> " method="post">
                            <?php if (!empty($_GET['datos'])) {
                                echo "<p class='text-danger'>Datos modificados</p>";
                            } ?>
                            <div class="form-group">
                                <label for="username">Nombre de Usuario</label>
                                <input value="<?php echo $username; ?>" readonly required id="username" name="username" placeholder="nombre de Usuario" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">Correo</label>
                                <input value="<?php echo $email; ?>" id="email" name="email" placeholder="nombre de Usuario" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="namae">Nombre</label>
                                <input value="<?php echo $first_name; ?>" id="namae" name="first_name" placeholder="nombre de Usuario" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="lastname">Apellido</label>
                                <input value="<?php echo $last_name; ?>" id="lastname" name="last_name" placeholder="nombre de Usuario" type="text" class="form-control">
                            </div>
                            <div class="form-group text-center p-5">
                                <button id="submit" name="submit" type="submit" class="btn  boton">Editar</button>
                            </div>
                        </form>
                    </div>
>>>>>>> b5ea6cb6ea9ff910bce8452099d21141eb50dd14

                <div class="datos-perfil ">
                <?php require 'viewData.php' ?>
                </div>

                                <?php foreach ($posts as $post) require 'postUser.php' ?>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="admin" role="tabpanel" aria-labelledby="admin-tab">
                    <div id="container-main" class="d-flex flex-direccion-row  p-5 w-100 h-100">
                        <div id="content-main" class="content  col-xl-12 d-flex justify-content-center h-100 ">
                            <div id="crear usuarios" class=" col-xl-12  w-100">

                                <?php $var = $intancia->RutaLinks($escaped_link, "Controller/crear/C_Crear_Usuario.php")  ?>

                                <form action="<?php echo $var[0]['ruta'] ?> " method="post">
                                    <div class="form-group">
                                        <label for="username">Nombre de Usuario</label>
                                        <input value="" required id="username" name="username" placeholder="nombre de Usuario" type="text" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Correo</label>
                                        <input value="" id="email" name="email" placeholder="email" type="text" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="namae">Nombre</label>
                                        <input value="" id="namae" name="first_name" placeholder="Nombre" type="text" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="lastname">Apellido</label>
                                        <input value="" id="lastname" name="last_name" placeholder="Apellidos" type="text" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Contraseña</label>
                                        <input value="" id="password" name="password" placeholder="Contraseña" type="text" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="rol">Rol</label>
                                        <input value="" id="rol" name="rol" placeholder="Rol (admin o vacio)" type="text" class="form-control">
                                    </div>

                                    <div class="form-group text-center p-5">
                                        <button id="submit" name="submit" type="submit" class="btn  boton">Crear</button>
                                    </div>

                                </form>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>


    </div>
<<<<<<< HEAD

</div>
</div>
=======
    </div>

    <script>
        document.getElementById("logout-tab").addEventListener("click", function() {
            window.location.href = "../../Controller/Logout.php";
        });
<<<<<<< HEAD
    </script>
=======

        
    </script>
>>>>>>> b5ea6cb6ea9ff910bce8452099d21141eb50dd14
>>>>>>> 85cc35b7c8b045ef188702852127723ffd41b19d
