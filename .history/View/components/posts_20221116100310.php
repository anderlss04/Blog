<?php

foreach ($posts as $post) { ?>
    <?php $id = $post['title'] ?>
    <div class="card mb-3 col-md-8 carta" id="<?php echo $post['userId'] ?>">
        <div class="row g-0 d-flex">

            <?php if (isset($post['image']) && $post['image'] != null) { ?>
                <div class="bg-image ">
                    <img class="img-fluid  " <?php echo "src='data:image/jpeg;base64," .
                                                    base64_encode($post['image']) . "'"; ?>>
                </div>
            <?php } ?>
            <div class="col-md-12">
                <div class="card-body">
                    <h5 class="card-title">
                        <?php echo $post['title']; ?>
                    </h5>
                    <p class="card-text">
                        <?php echo $post['content']; ?>
                    </p>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <small class="text-muted">
                        <p>Publicado <?php echo $post['created_at']; ?></p>
                    </small>
                    <small class="text-muted icons">
                        <button href="" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#UserModal<?php echo $post['id'] ?>"> <i class="fa-solid fa-user"></i></button>

                        <button id="botonComments<?php echo $post['id'] ?>" href="?title=<?php echo $post['title'] ?>" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ComentModal<?php echo $post['id'] ?>"> <i class="fa-solid fa-comment"></i></button>
                    </small>
                </div>
            </div>
        </div>


        <div class="modal fade" id="ComentModal<?php echo $post['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            
        <?php require 'Controller/ver/C_Ver_Comments_Post.php'; foreach ($comments as $comment) { ?>
            <?php if (isset($comment)) { ?>
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">
                                <?php echo $comment['name'] ?>
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
                                <?php echo $comment['comment']; ?>
                            </p>
                            <small class="text-muted">
                                <p>Publicado
                                    <?php echo $comment['created_at']; ?>
                                </p>
                            </small>
                        </div>
                        <?php if ?>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <a type="button" href="<?php echo $rutaDel[0]['ruta'] . '?id=' . $post['id'] ?> " class="btn btn-primary">Comentarios</a>
                        </div>
                    </div>
                </div>
            <?php }else{
                echo "No hay comentarios";?>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <?php }} ?>
        </div>


    </div>
<?php } ?>