<?php
// require 'Controller/ver/C_Ver_Todos_Posts.php';
$rutaPosts = $intancia->RutaLinks($escaped_link, "Controller/ver/Admin/C_Ver_Todos_Posts_Admin.php");
$rutaDel = $intancia->RutaLinks($escaped_link, "Controller/borrar/admin/C_Borrar_Post.php");
require $rutaPosts[0]['ruta'];
?>



<div class="container h-100 ">
    <div class="content h-100 d-flex justify-content-center align-items-center  ">
        <?php if(isset($_GET['id']) && $_GET['id'] != "" &&$_GET['id']!=null ){ ?>
            <h6 class="text-danger">Se ha eliminado correctamenta</h6>
            <?php } ?>
        <div class="content-card w-100 px-4 ">
            <?php foreach ($posts as $post) { ?>
            <div class="card  cartaPost mb-3 mx-2 ">
                <div is class="card-body d-flex justify-content-between px-3">
                    <?php echo $post['content'] ?>
                    <div class="icons ">
                        <a href="<?php echo $rutaDel[0]['ruta'].'?id='.$post['id']?>"> <i class="fa-sharp fa-solid fa-eraser"></i></a>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal<?php echo $post['id'] ?>"> <i class="fa-sharp fa-solid fa-eye"></i></button>
                    </div>
                </div>

            </div>
            <div class="modal fade" id="exampleModal<?php echo $post['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">
                                <?php echo $post['title'] ?>
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <?php if (isset($post['image']) && $post['image'] != null) { ?>
                            <div class="bg-image ">
                                <img class="img-fluid  " <?php echo "src='data:image/jpeg;base64," .
                        base64_encode($post['image']) . "'"; ?>>
                            </div>
                            <?php } ?>
                            <p class="card-text">
                                <?php echo $post['content']; ?>
                            </p>
                            <small class="text-muted">
                                <p>Publicado
                                    <?php echo $post['created_at']; ?>
                                </p>
                            </small>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <a type="button" href="<?php echo $rutaDel[0]['ruta'].'?id='.$post['id']?> " class="btn btn-primary">Borrar</a>
                        </div>
                    </div>
                </div>
            </div>

            <?php } ?>
            <div class="list">
            </div>
            <ul class="pagination">

            </ul>
        </div>

    </div>
</div>