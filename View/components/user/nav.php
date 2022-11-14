<nav id="navbar-header" class="navbar navbar-expand-lg navbar-light   px-5">
    <div class="container-fluid title-container">
        <a class="" href="#">JAse</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex flex-row-reverse  " id="navbarSupportedContent">
            <ul id="lis-navbar" class="m-3">
                <?php
      $valor = $intancia->rutaLinks($escaped_link, 'view/login/login.php');
      ?>
                <li><a href="<?php echo $valor[0]['ruta'] ?>">Entrar</a></li>

                <li>imagen</li>
            </ul>
        </div>
    </div>
</nav>