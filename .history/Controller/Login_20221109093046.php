

<?php
$user = $_POST["nombre"];
$pass = $_POST["pass"];

$mysqli = mysqli_connect('localhost', 'root', '', 'jase');
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