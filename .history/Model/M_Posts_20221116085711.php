<?php

namespace Model;

require_once 'Conexion.php';
require_once 'Posts.php';

/* It's a class that connects to a database and gets, inserts, deletes and modifies posts. */
class M_Posts extends Conexion
{
    public function getPosts()
    {
        $query = parent::con()->query('SELECT * FROM posts where status = 0');

        $retorno = [];

        while ($fila = $query->fetch_assoc()) {
            $retorno[] = $fila;
        }

        return $retorno;
    }

    public function getPost($idPost)
    {
        $query = parent::con()->query("SELECT users.username, users.email
            FROM users
            INNER JOIN posts ON users.id= posts.user_id  WHERE posts.user_id = $idPost;
            ");

        $fila = $query->fetch_array();
        return $fila;
    }

    public function getUserPost($title)
    {
        $query = parent::con()->query(
            "SELECT * FROM posts WHERE id = '$title'"
        );

        while ($fila = $query->fetch_assoc()) {
            return $fila;
        }
    }
    public function getPostsUser($user)
    {
        $query = parent::con()->query(
            "SELECT * FROM users WHERE username = '$user'"
        );

        while ($fila = $query->fetch_assoc()) {
            $user_id = $fila['id'];
        }

        $query = parent::con()->query(
            "SELECT * FROM posts WHERE userId = '$user_id'"
        );

        $retorno = [];

        while ($fila = $query->fetch_assoc()) {
            $retorno[] = $fila;
        }

        return $retorno;
    }

    public function insertPost(Posts $post)
    {
        parent::con()->query(
            "INSERT INTO posts (title, brief, content, image, created_at, status, user_id) VALUES ('{$post->getTitle()}', '{$post->getBrief()}', '{$post->getContent()}', '{$post->getImage()}', '{$post->getCreated_at()}', '{$post->getStatus()}', '{$post->getUser_id()}')"
        );

    }

    public function deletePost($title)
    {
        $sentencia = parent::con()->prepare('UPDATE posts SET status = 1 WHERE id = ?');

        $sentencia->bind_param('s', $title);

        $sentencia->execute();
        $sentencia->close();
    }

    public function modPost(Posts $post)
    {
        $sentencia = parent::con()->prepare(
            'UPDATE posts SET title = ?, brief = ?, content = ?, image = ?, created_at = ?, status = ?, userId = ? WHERE title = ?'
        );

        $sentencia->bind_param(
            'sssbssis',
            $post->getTitle(),
            $post->getBrief(),
            $post->getContent(),
            $post->getImage(),
            $post->getCreated_at(),
            $post->getStatus(),
            $post->getUser_id(),
            $post->getTitle()
        );

        $sentencia->execute();
        $sentencia->close();
    }
}