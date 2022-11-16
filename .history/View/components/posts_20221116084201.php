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
               <button href="" type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#UserModal<?php echo $post['id'] ?>"> <i class="fa-solid fa-user"></i></button>

               <button id="botonComments<?php ?>" href="?title=<?php echo $post['title'] ?>" type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#ComentModal<?php echo $post['id'] ?>"> <i class="fa-solid fa-comment"></i></button>
                </small>
            </div>
        </div>
    </div>
</div>
<?php } ?>


<script>
   document.getElementById("botonComments").addEventListener("click", function(){
    document.getElementById("ComentModal").style.display = "block";
    document.getElementById("form-entrar").style.display = "none";
   });
</script>