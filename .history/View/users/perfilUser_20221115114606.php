<?php
include '../components/user/ObtenerRuta.php';
require '../../Controllers/RutasController.php';
$valor = $intancia->Vistas($escaped_link);
require '../../Controller/ver/C_Ver_Post_User.php';
require '../../Controller/ver/C_Ver_Usuario.php';
?>

<head>
    <link rel="stylesheet" href="../../src/css/user.css">
</head>
<?php
$valor = $intancia->rutaLinks($escaped_link, 'components/posts.php');
$lin = $intancia->RutaLinks($escaped_link, 'components/scripts/links.php');
?>
<script src="src/js/main.js"></script>
<?php
require '../../View/components/footer.php';
require $lin[0]['ruta'];
?>
<div class="content-img W-100  d-flex justify-content-center align-items-center">
    <div class="content-img-inner d-flex justify-content-center align-items-center">
        <div class="img-perfil">
        </div>
    </div>
</div>
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
            </ul>
        </div>
        <div class="tab-content " id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="datos-perfil ">
                    <?php require 'viewData.php'; ?>
                </div>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div id="container-main" class="d-flex flex-direccion-row  p-5 w-100 h-100">
                    <div id="content-main" class="content  col-xl-12 d-flex justify-content-center h-100 ">
                        <div id="publicacion" class=" col-xl-12  w-100">
                            <?php require $valor[0]['ruta']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script>
    document.getElementById("logout-tab").addEventListener("click", function() {
        window.location.href = "../../Controller/Logout.php";
    });
</script>