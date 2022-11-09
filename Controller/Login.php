<?php
$user = $_POST['nombre'];
$pass = $_POST['pass'];

$mysqli = new mysqli('localhost', 'root', '', 'jase');
$conn = mysqli_connect('localhost', 'root', '', 'jase');
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
    // print_r("Bienvenido - " . $user);
    header('Location: ../View/users/perfilUser.php');
} else {
    header('Location: ../View/login/login.php?error=1');
    print_r('error usuario o contraseña ');
}
?>