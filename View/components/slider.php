<?php require 'Controller/ver/C_Ver_Usuario_Post.php';
$image = $intancia->RutaLinks($escaped_link, "src/images/default.jpg");
$form = $intancia->RutaLinks($escaped_link, "View/login/forms/portada.php")
    //  $usuario = $user->getPost($id);
//  var_dump($usuario)
    ?>
<div id='content-rigth' class='per p-2 w-100 d-flex align-items-center'>
    <?php if (isset($_SESSION['name']) && isset($_SESSION['name'])) { ?>
    <div class='container mt-4 mb-4 p-3 d-flex justify-content-center'>
        <div class='card p-4'>
            <div class=' image d-flex flex-column justify-content-center align-items-center'> <button
                    class='btn btn-secondary'> <img src='<?php echo $image[0]['ruta'] ?>' height='100'
                        width='100' /></button> <span class='name mt-3'>Eleanor Pena</span> <span
                    class='idd'>@eleanorpena</span>
                <div class='d-flex flex-row justify-content-center align-items-center gap-2'> <span
                        class='idd1'>Oxc4c16a645_b21a</span> <span><i class='fa fa-copy'></i></span> </div>
                <div class='d-flex flex-row justify-content-center align-items-center mt-3'> <span class='number'>1069
                        <span class='follow'>Followers</span></span> </div>
                <div class=' d-flex mt-2'> <button class='btn1 btn-dark'>Edit Profile</button> </div>
                <div class='text mt-3'> <span>Eleanor Pena is a creator of minimalistic x bold graphics and digital
                        artwork.<br><br> Artist/ Creative Director by Day #NFT minting@ with FND night. </span> </div>
                <div class='gap-3 mt-3 icons d-flex flex-row justify-content-center align-items-center'> <span><i
                            class='fa fa-twitter'></i></span> <span><i class='fa fa-facebook-f'></i></span> <span><i
                            class='fa fa-instagram'></i></span> <span><i class='fa fa-linkedin'></i></span> </div>
                <div class=' px-2 rounded mt-4 date '> <span class='join'>Joined May,2021</span> </div>
            </div>
        </div>
    </div>
    <?php } else { ?>
    <div class='form-logs container  mb-4  d-flex justify-content-center'>
        <div class='card p-4 text-center'>
            <h1>Entrar</h1>
            <?php require $form[0]['ruta']; ?>

        </div>
    </div>

    <?php } ?>

</div>


<?php
if (isset($id)) {
    $usuario = $user->getPost($id);
    var_dump($usuaio);
}
?>