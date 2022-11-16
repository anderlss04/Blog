<div class="modal fade" id="UserModal<?php echo $post['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
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

          

            <div class="modal fade" id="ComentModal<?php echo $post['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
               <?php foreach($comments as $com){?>
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">
                                
                                <?php echo $comments['name'] ?>
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
                                <p>Comentarios
                                     <?php echo $comments['comment']; ?>
                                </p>
                            </small>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <a type="button" href="<?php echo $rutaDel[0]['ruta'].'?id='.$post['id']?> " class="btn btn-primary">Borrar</a>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>