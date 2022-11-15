<?php foreach ($posts as $post) {  ?>
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
                <i class="fa-solid fa-user"></i>
                <i class="fa-solid fa-comment"> <span>
                <?php echo isset($post['comment']) && $post['comment'] != null ? 
                ( "cantidad")
                : ( "0" )?>    
                </span> </i>
                </small>
            </div>
        </div>
    </div>
</div>
<?php } ?>