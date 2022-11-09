// use Model\M_Login;
// require_once('../Model/M_Login.php');

// if(isset($_POST['nombre']) && $_POST['pass'] ){
//     $nombre= $_POST['nombre'];
//     $dni = $_POST['pass'];
//     $nuevo = new  M_Login();
//    $datos = $nuevo ->comprobarUser($nombre, $dni);
//    var_dump($datos);
//     if(!$datos){
//         print_r("error usuario o contraseña ");
//         header("Location: ../index.php");
//     }else{
//         session_start();
//         $_SESSION['user'] = $nombre;

//         header("Location: ../View/users/perfilUser.php");
//     }
// }

<?php
$user = $_POST["user"];
$pass = $_POST["pass"];

$conn = mysqli_connect("localhost", "root", "", "jase");
if ($mysqli->connect_errno) {
    echo '<p class=error >Fallo al conectar a MySQL: </p>(' .
        $mysqli->connect_errno .
        ') ' .
        $mysqli->connect_error;
}

$sql = "SELECT * FROM users WHERE username = '$user' AND password = '$pass'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    session_start();
    $_SESSION['user'] = $user;
    print_r("Bienvenido" . $user);
    // header("Location: principal.php");
} else {
    // header("Location: index.php?error=1");
    print_r("error usuario o contraseña ");
}
?>