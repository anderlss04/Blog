<?php

namespace Model;
require_once 'Usuario.php';
require_once 'Conexion.php';

class M_Usuario extends Conexion{

    public function View($url , $array){
        var_dump($array);
        $data= serialize($array);
        var_dump($data);

         header("Location:". $url ."?data=".$data, true);
        //  header("Location:". $url ."?data=".$data);
     
     }
    public function getUsers(){
        $query = parent::con()->query('SELECT * FROM users');
        
        $retorno = [];
        
        while($fila = $query->fetch_assoc()){
            $retorno[] = $fila;
        }
        
        return  $retorno;
    }

    public function getUser($username){
        $query = parent::con()->query("SELECT * FROM users WHERE username = '$username'");
        
        while($fila = $query->fetch_assoc()){
            return $fila;
        }
        
        
    }

    public function insertLastLogin($username){
        $query = parent::con()->query("UPDATE users SET last_login = OW()N WHERE username = '$username'");
    }
    
    public function insertUsuario(Usuario $usuario){
        $sentencia = parent::con()->prepare("INSERT INTO users(username, password, email, created_on, last_login, active, first_name, last_name, rol) VALUES (?,?,?,?,?,?,?,?,?)");
        
        $sentencia->bind_param("sssssssss", $usuario->getUsername(), $usuario->getPassword(), $usuario->getEmail(), $usuario->getCreated_on(), $usuario->getLast_login(), $usuario->getActive(), $usuario->getFirst_name(), $usuario->getLast_name(), $usuario->getRol());
        
        $sentencia->execute();
        $sentencia->close();
    }

    public function deleteUsuario($username){
        $sentencia = parent::con()->prepare("UPDATE users SET active = 0 WHERE username = ?");

        $sentencia->bind_param("s", $username);
        
        $sentencia->execute();
        $sentencia->close();
    }

    public function modUsuario(Usuario $usuario){
        $sentencia = parent::con()->prepare("UPDATE users SET password = ?, email = ?, created_on = ?, last_login = ?, active = ?, first_name = ?, last_name = ?, rol = ? WHERE username = ?");
        
        $sentencia->bind_param("sssssssss", $usuario->getPassword(), $usuario->getEmail(), $usuario->getCreated_on(), $usuario->getLast_login(), $usuario->getActive(), $usuario->getFirst_name(), $usuario->getLast_name(), $usuario->getRol(), $usuario->getUsername());
        
        $sentencia->execute();
        $sentencia->close();
    }



}
