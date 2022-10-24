<?php

namespace Model;

require_once 'Conexion.php';
require_once 'Posts.php';

class M_Posts extends Conexion{
    
        public function getPosts(){
            $query = parent::con()->query('SELECT * FROM posts');
    
            $retorno = [];
    
            while($fila = $query->fetch_assoc()){
                $retorno[] = $fila;
            }
    
            return  $retorno;
        }
    
        public function getPost($title){
            $query = parent::con()->query("SELECT * FROM posts WHERE id = '$title'");
    
            while($fila = $query->fetch_assoc()){
                return $fila;
            }
        }
    
        
        // public function insertPost(Posts $post){
        //     $sentencia = parent::con()->prepare("INSERT INTO posts(title, brief, content, image, created_at, status, user_id) VALUES (?,?,?,?,?,?,?)");
    
        //     $sentencia->bind_param("ssssssi", $post->getTitle(), $post->getBrief(), $post->getContent(), $post->getImage(), $post->getCreated_at(), $post->getStatus(), $post->getUser_id());
    
        //     $sentencia->execute();
        //     $sentencia->close();
        // }
    
        public function deletePost($title){
            $sentencia = parent::con()->prepare("DELETE FROM posts WHERE title = ?");
    
            $sentencia->bind_param("s", $title);
    
            $sentencia->execute();
            $sentencia->close();
        }
    
        public function modPost(Posts $post){
            $sentencia = parent::con()->prepare("UPDATE posts SET title = ?, brief = ?, content = ?, image = ?, created_at = ?, status = ?, user_id = ? WHERE title = ?");
    
            $sentencia->bind_param("ssssssis", $post->getTitle(), $post->getBrief(), $post->getContent(), $post->getImage(), $post->getCreated_at(), $post->getStatus(), $post->getUser_id(), $post->getTitle());
    
            $sentencia->execute();
            $sentencia->close();
        }
}