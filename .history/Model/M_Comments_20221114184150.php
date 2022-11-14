<?php

namespace Model;

require_once 'Conexion.php';
require_once 'Comments.php';

class M_Comments extends Conexion{

    public function getComments(){
        $query = parent::con()->query('SELECT * FROM comments');

        $retorno = [];

        while($fila = $query->fetch_assoc()){
            $retorno[] = $fila;
        }

        return  $retorno;
    }

    public function getComment($id){
        $query = parent::con()->query("SELECT * FROM comments WHERE id = '$id'");

        while($fila = $query->fetch_assoc()){
            return $fila;
        }
    }

    public function insertComment(Comments $comment){
        $sentencia = parent::con()->prepare("INSERT INTO comments(name, comment, email, post_id, created_at, status) VALUES (?,?,?,?,?,?)");

        $sentencia->bind_param("ssssss", $comment->getName(), $comment->getComment(), $comment->getEmail(), $comment->getPost_id(), $comment->getCreated_at(), $comment->getStatus());

        $sentencia->execute();
        $sentencia->close();
    }

    public function deleteComment($id){
        $sentencia = parent::con()->prepare("DELETE FROM comments WHERE id = ?");

        $sentencia->bind_param("s", $id);

        $sentencia->execute();
        $sentencia->close();
    }

    public function modComment(Comments $comment){
        $sentencia = parent::con()->prepare("UPDATE comments SET name = ?, comment = ?, email = ?, post_id = ?, created_at = ?, status = ? WHERE id = ?");

        $sentencia->bind_param("sssssss", $comment->getName(), $comment->getComment(), $comment->getEmail(), $comment->getPost_id(), $comment->getCreated_at(), $comment->getStatus(), $comment->getId());

        $sentencia->execute();
        $sentencia->close();
    }

}