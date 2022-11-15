<link rel="stylesheet" href="css/home.css">
<div class="row h-100 justify-content-center d-flex align-items-center">

    <div class=" col col-8  mb-3 ">
        <div class="col col-12 mb-5">
            <div class="card h-100 shadow p-3 mb-5 bg-white rounded ">
                <div class="card-body">
                    <div class="content-body">
                        <div class="content-body-info col-12">
                            <form action="" class="form-general">
                                <div class="from-item-group">
                                    <div class="from-item-group-content" id="emisor">
                                        <div class="from-row-tittle d-flex">
                                            <div class="from-row w-100">
                                                <div class="icon-seting">
                                                    <h4>Información General</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="porfile-info d-flex w-100">
                                            <div class="porfile-info-content">
                                                <div class="porfile-info-content-element col-12">

                                                    <form action="<?php echo $var[0]['ruta'] ?> " method="POST"
                                                        class="text-center">
                                                        <!--  Creación de una fila con dos columnas. La primera columna es para el nombre y la segunda
           columna es para el apellido. * -->
                                                        <div class="row">
                                                            <div class="col-md-6 mb-4">
                                                                <div class="form-outline">
                                                                    <input value="<?php echo $first_name; ?>"
                                                                        type="text" id="formNombre" name="first_name"
                                                                        class="form-control" />
                                                                    <label class="form-label"
                                                                        for="formNombre">Nombre</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 mb-4">
                                                                <div class="form-outline">
                                                                    <input value="<?php echo $last_name; ?>" type="text"
                                                                        id="formApellido" name="last_name"
                                                                        class="form-control" />
                                                                    <label class="form-label"
                                                                        for="formApellido">Apellido</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-4 mb-4">
                                                                <div class="form-outline">
                                                                    <input value="<?php echo $username; ?>" readonly
                                                                        type="text" id="formUserName" name="username"
                                                                        class="form-control" />
                                                                    <label class="form-label" for="formUserName">Nombre
                                                                        de Usuario</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 mb-4">
                                                                <div class="form-outline">
                                                                    <input value="<?php echo $email; ?>" type="email"
                                                                        id="formEmail" name="email"
                                                                        class="form-control" />
                                                                    <label class="form-label" for="formEmail">Email
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>



                                                        <!-- /* El usuario ingresar una contraseña. */ -->
                                                        <div class="form-outline mb-4">
                                                            <input value="<?php echo $password; ?>" type="password"
                                                                id="formPass" name="password" class="form-control" />
                                                            <label class="form-label" for="formPass">Contraseña</label>
                                                        </div>


                                                        <!-- /* Botón de envío. */ -->
                                                        <button type="submit" class="boton btn  btn-block mb-4">
                                                            Editar
                                                        </button>


                                                    </form>

                                                </div>
                                                <div class="porfile-info-content-element col-6">


                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>





                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>


</div>