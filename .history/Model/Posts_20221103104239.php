<?php

namespace Model;

class Posts{

    private $id;
    private $title;
    private $brief;
    private $content;
    private $image;
    private $created_at;
    private $status;
    private $user_id;

    public function __construct( $title, $brief, $content, $image, $created_at, $status, $user_id){
        $this->title = $title;
        $this->brief = $brief;
        $this->content = $content;
        $this->image = $image;
        $this->created_at = $created_at;
        $this->status = $status;
        $this->user_id = $user_id;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getBrief(){
        return $this->brief;
    }

    public function getContent(){
        return $this->content;
    }

    public function getImage(){
        return $this->image;
    }

    public function getCreated_at(){
        return $this->created_at;
    }

    public function getStatus(){
        return $this->status;
    }

    public function getUser_id(){
        return $this->user_id;
    }

    public function setTitle($title){
        $this->title = $title;
    }

    public function setBrief($brief){
        $this->brief = $brief;
    }

    public function setContent($content){
        $this->content = $content;
    }

    public function setImage($image){
        $this->image = $image;
    }

    public function setCreated_at($created_at){
        $this->created_at = $created_at;
    }

    public function setStatus($status){
        $this->status = $status;
    }

    public function setUser_id($user_id){
        $this->user_id = $user_id;
    }








}

?>