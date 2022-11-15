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

    public function recuperarContraseña($email)
    {
        $con = mysqli_connect('localhost', 'root', '', 'jase');

        $datos = mysqli_query(
            $con,
            "SELECT password FROM users WHERE email = '$email' "
        );
        // $datos = array_merge($datos, $datos);
        if (!$datos) {
            return mysqli_error($con);
        } else {
            return 'boo';
        }
        // return $datos;
    }

}

?>