    <link rel="stylesheet" href="../../src/css/user.css">
    <?php require '../components/scripts.php'; ?>
    <?php
require '../../Controller/ver/C_Ver_Post_User.php';
?>

    <div class="content-img W-100  d-flex justify-content-center align-items-center">
        <div class="content-img-inner d-flex justify-content-center align-items-center">
            <div class="img-perfil">
            </div>
        </div>
    </div>
    <div class="container w-100 h-100 d-flex justify-content-center flex-column align-items-center">
        <div class="options w-50 h-100">
            <div class="opcion">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                            type="button" role="tab" aria-controls="home" aria-selected="true">Datos Generales</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                            type="button" role="tab" aria-controls="profile"
                            aria-selected="false">Publicaciones</button>
                    </li>

                </ul>
            </div>
            <div class="tab-content " id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                    <div class="datos-perfil ">
                        <form>
                            <div class="form-group">
                                <label for="username">Nombre de Usuario</label>
                                <input id="username" name="username" placeholder="nombre de Usuario" type="text"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email">Correo</label>
                                <input id="email" name="email" placeholder="nombre de Usuario" type="text"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="namae">Nombre</label>
                                <input id="namae" name="namae" placeholder="nombre de Usuario" type="text"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="lastname">Apellido</label>
                                <input id="lastname" name="lastname" placeholder="nombre de Usuario" type="text"
                                    class="form-control">
                            </div>
                            <div class="form-group text-center p-5">
                                <button name="submit" type="submit" class="btn  boton">Editar</button>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div id="container-main" class="d-flex flex-direccion-row  p-5 w-100 h-100">
                        <div id="content-main" class="content  col-xl-12 d-flex justify-content-center h-100 ">
                            <div id="publicacion" class=" col-xl-12  w-100">

                                <?php foreach ($posts as $post) { ?>
                                <div class="card border-0 shadow mb-3  col-xl-12">
                                    <img class="card-img-top" <?php echo src" $post[
                                        'image'
                                    ]; ?>" alt="Card image cap">
                                    <div class="card-body ">
                                        <h5 class="card-title"><?php echo $post[
                                            'title'
                                        ]; ?></h5>
                                        <p class="card-text"><?php echo $post[
                                            'brief'
                                        ]; ?></p>
                                        <p class="card-text"><small class="text-muted">Last <?php echo $post[
                                            'created_at'
                                        ]; ?></small></p>
                                    </div>
                                </div>

                                <?php } ?>
                            </div>
                        </div>

                    </div>

                </div>
            </div>


        </div>

    </div>
    </div>