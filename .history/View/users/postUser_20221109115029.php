<div class="card border-0 shadow mb-3  col-xl-12">
    <img class="card-img-top" <?php echo "src="data:image/jpeg;base64,". base64_encode($post['image']) . "'"; ?> alt="Card image cap">
    <div class="card-body ">
        <h5 class="card-title"><?php echo $post['title']; ?></h5>
        <p class="card-text"><?php echo $post['brief']; ?></p>
        <p class="card-text"><small class="text-muted">Last <?php echo $post['created_at']; ?></small></p>
    </div>
</div>
<?php   
var_dump($post['image']);