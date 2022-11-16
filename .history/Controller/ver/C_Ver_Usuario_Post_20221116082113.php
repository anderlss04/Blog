<?php
namespace Model;
require_once 'Model/Conexion.php';

class C_Ver_Usuario_Post extends Conexion{
    public function getPost($idPost){
        $query = parent::con()->query("SELECT users.username, users.email FROM users INNER JOIN posts ON users.id= posts.userId  WHERE posts.userId = '$idPost'");
    
        $fila = $query->fetch_array(); 
        return $fila;
    }
    // require_once('../../Index.php');//relleno
    
    
}
$user = new C_Ver_Usuario_Post();
?>