<?php
// require 'Controller/ver/C_Ver_Todos_Posts.php';
$rutaPosts = $intancia->RutaLinks($escaped_link, "Controller/ver/admin/C_Ver_Usuarios.php");

require $rutaPosts[0]['ruta'];
    ?>


<div class="container h-100 ">
    <div class="content h-100 d-flex justify-content-center align-items-center  ">
        <div class="content-card w-100 px-4 ">
            <?php foreach ($admins as $post) { ?>
            <div class="card  cartaPost mb-3 mx-2 ">
                <div is class="card-body d-flex justify-content-between px-3">
                    <?php echo $post['username'] . '/ <strong>' . $post['first_name'].' '.$post['last_name']. '</strong>'?>
                    <div class="icons ">
                    <a href="<?php echo $rutaDel[0]['ruta'].'?username='.$post['username']?>"> <i class="fa-sharp fa-solid fa-eraser"></i></a>
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
                                <?php echo $post['username'] ?>
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                
                            <p class="card-text">
                                <?php echo $post['email']; ?>
                            </p>
                            <p class="card-text">
                                <?php echo $post['first_name']; ?>
                            </p>
                            <p class="card-text">
                                <?php echo $post['last_name']; ?>
                            </p>
                            <small class="text-muted">
                                <p>Publicado
                                    <?php echo $post['created_on']; ?>
                                </p>
                            </small>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <a type="button" href="<?php echo $rutaDel[0]['ruta'].'?username='.$post['username']?> " class="btn btn-primary">Borrar</a>
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