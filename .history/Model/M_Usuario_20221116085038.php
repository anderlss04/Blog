<?php

namespace Model;
require_once 'Usuario.php';
require_once 'Conexion.php';

class M_Usuario extends Conexion{

   
    public function getUsers(){
        $query = parent::con()->query('SELECT * FROM users WHERE rol != "1" and ac');
        
        $retorno = [];
        
        while($fila = $query->fetch_assoc()){
            $retorno[] = $fila;
        }
        
        return  $retorno;
    }
    public function getAdmins(){
        $query = parent::con()->query('SELECT * FROM users WHERE rol = "1"');
        
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
        parent::con()->query("UPDATE users SET last_login = NOW() WHERE username = '$username'");
    }
    
    public function insertUsuario(Usuario $usuario){
        $sentencia = parent::con()->prepare("INSERT INTO users(username, password, email, created_on, last_login, active, first_name, last_name, rol) VALUES (?,?,?,?,?,?,?,?,?)");
        
        $sentencia->bind_param("sssssssss", $usuario->getUsername(), $usuario->getPassword(), $usuario->getEmail(), $usuario->getCreated_on(), $usuario->getLast_login(), $usuario->getActive(), $usuario->getFirst_name(), $usuario->getLast_name(), $usuario->getRol());
        
        $sentencia->execute();
        $sentencia->close();
    }

    public function deleteUsuario($username){
        $sentencia = parent::con()->prepare("UPDATE users SET active = 1 WHERE username = ?");

        $sentencia->bind_param("s", $username);
        
        $sentencia->execute();
        $sentencia->close();
    }

    public function modUsuario(Usuario $usuario){
        $sentencia = parent::con()->prepare("UPDATE users SET email = ?, first_name = ?, last_name = ?, password = ? WHERE username = ?");
        
        $sentencia->bind_param("sssss", $usuario->getEmail(), $usuario->getFirst_name(), $usuario->getLast_name(), $usuario->getPassword(), $usuario->getUsername());
        
        $sentencia->execute();
        $sentencia->close();
    }



}
