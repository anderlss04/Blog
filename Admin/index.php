<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- estilos -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/admin.css">
    <!-- scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

</head>

<body>
    <main>
        <div id="nabvar-admin" class="d-flex flex-column flex-shrink-0 p-3 text-white " style="width: 300px;">
            <a href="/Blog/Admin" class="d-flex align-items-center align-items-center  mb-3 mb-md-0 me-md-auto text-white text-decoration-none text-center">
                <!-- <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg> -->
                <img src="images/jase-palabra-gris.png" alt="">
                <!-- <span class="fs-4">Admin</span> -->
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="?dato=home" class="nav-link text-white active" key="home" aria-current="page">
                        <i class="fa-solid fa-house mx-lg-3"></i> Home
                    </a>
                </li>
                <li>
                    <a href="?dato=Publicaciones" class="nav-link text-white " key="Publicaciones">
                        <i class="fa-solid fa-envelopes-bulk mx-lg-3"></i> Publicaciones
                    </a>
                </li>
                <li>
                    <a href="?dato=Usuarios" class="nav-link text-white" key="Usuarios">
                        <i class="fa-solid fa-users mx-lg-3"></i></svg> Usuarios
                    </a>
                </li>
                <li>
                    <a href="?dato=Admins" class="nav-link text-white" key="Admins">
                        <i class="fa-solid fa-lock mx-lg-3"></i> Admins
                    </a>
                </li>

            </ul>
            <hr>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="" class="rounded-circle me-2" width="32" height="32">
                    <strong>mdo</strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">

                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col min-vh-100 p-3" id="content-admin">
                    
                    <?php 

                    if(isset($_GET['dato']) && $_GET['dato'] != null){
                     
                        switch($_GET['dato']){
                            case 'Admins':
                            include 'components/contentAdmins.php';
                            break;
                            case 'Publicaciones':
                            include 'components/contentPublicaciones.php';
                            break;
                            case 'Usuarios':
                            include 'components/contentUsuarios.php';
                            break;
                            default: 
                            include 'components/home.php';
                            break;

                        }

                    }else{
                        include 'components/home.php';

                    }
                    ?>
                </div>
            </div>
        </div>
    </main>
    <script src="js/main.js"></script>


</body>

</html>