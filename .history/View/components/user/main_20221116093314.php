<?php require 'Controller/ver/C_Ver_Todos_Posts.php';
require 'Controller/ver/C_Ver_Post.php';
 $rutaPosts = $intancia->RutaLinks($escaped_link, "View/components/posts.php" ) ;
 $commentUser = $intancia->RutaLinks($escaped_link, "View/ver/C_Ver_Comments_Post" ) ;

 ?>
<div class="d-flex flex-direccion-row w-100 h-100 ">
    <div id="container-main" class="d-flex flex-direccion-row  p-5 ">
        <div id="content-main" class="content  col-xl-12 d-flex justify-content-center h-100 ">
            <div id="publicacion" class=" col-xl-12  w-75">
                <!-- trae los post de cpomponents -->
            <?php include $rutaPosts[0]['ruta']; ?> 

            </div>
          
        </div>

    </div>
    <?php
    // trae el perfil del Usuario 
    include $perfilUser[0]['ruta']; 
    ?>
</div>