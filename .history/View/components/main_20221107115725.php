<?php require "Controller/ver/C_Ver_Todos_Posts.php"; ?>
<div class="d-flex flex-direccion-row w-100 h-100 ">
    <div id="container-main" class="d-flex flex-direccion-row  p-5 ">
        <div id="content-main" class="content  col-xl-12 d-flex justify-content-center overflow-auto  h-50 ">
            <div id="publicacion" class=" col-xl-12  w-75 ">

            <?php foreach ($posts as $post) { ?>
                <div class="card border-0 shadow mb-3  col-xl-12">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body ">
                        <h5 class="card-title"><?php $post-> ?></h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>

            <?php } ?>
            </div>
        </div>

    </div>
    <?php include 'slider.php'; ?>
</div>