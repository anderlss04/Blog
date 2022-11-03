<?php

namespace Model;

class Comments{

    private $name;
    private $comment;
    private $email;
    private $post_id;
    private $created_at;
    private $status;

    public function __construct( $name, $comment, $email, $post_id, $created_at, $status){
        $this->name = $name;
        $this->comment = $comment;
        $this->email = $email;
        $this->post_id = $post_id;
        $this->created_at = $created_at;
        $this->status = $status;
    }

    public function getName(){
        return $this->name;
    }

    public function getComment(){
        return $this->comment;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getPost_id(){
        return $this->post_id;
    }

    public function getCreated_at(){
        return $this->created_at;
    }

    public function getStatus(){
        return $this->status;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function setComment($comment){
        $this->comment = $comment;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function setPost_id($post_id){
        $this->post_id = $post_id;
    }

    public function setCreated_at($created_at){
        $this->created_at = $created_at;
    }

    public function setStatus($status){
        $this->status = $status;
    }

}