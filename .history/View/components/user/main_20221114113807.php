<?php require 'Controller/ver/C_Ver_Todos_Posts.php'; ?>
<div class="d-flex flex-direccion-row w-100 h-100 ">
    <div id="container-main" class="d-flex flex-direccion-row  p-5 ">
        <div id="content-main" class="content  col-xl-12 d-flex justify-content-center h-100 ">
            <div id="publicacion" class=" col-xl-12  w-75">

                <?php foreach ($posts as $post) { ?>
                    <div class="card border-0 shadow mb-3  col-xl-12">
                        <img class="card-img-top" src="<?php echo $post['image'] ?>" alt="Card image cap">
                        <div class="card-body ">
                            <h5 class="card-title"><?php echo $post['title'] ?></h5>
                            <p class="card-text"><?php echo $post['brief'] ?></p>
                            <p class="card-text"><small class="text-muted">Last <?php echo $post['created_at'] ?></small></p>
                        </div>
                    </div>
                <?php } ?>
                
            </div>
        </div>

    </div>
    <?php //include 'slider.php'; ?>
</div>