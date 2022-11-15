<?php
namespace Model;
require_once 'Conexion.php';

class M_Login extends Conexion
{
    // public function comprobarUser($username, $password)
    // {
    //     $con = mysqli_connect('localhost', 'root', '', 'jase');

    //     $datos = mysqli_query(
    //         $con,
    //         "SELECT * FROM users WHERE username = '$username' "
    //     );
    //     // $datos = array_merge($datos, $datos);
    //     if (!$datos) {
    //         return mysqli_error($con);
    //     } else {
    //         return 'boo';
    //     }
    //     // return $datos;
    // }

    public function recuperarContraseña($email){
        $sentencia = parent::con()->prepare("SELECT password FROM users WHERE email = ?");

        $sentencia->bind_param("s", $email);

        $sentencia->execute();

        $sentencia->bind_result($password);

        $sentencia->fetch();

        $sentencia->close();

        return $password;

        
    }

}

?>