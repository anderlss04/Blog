<?php

namespace Model;

class Usuario{
    
    private $username;
    private $password;
    private $email;
    private $created_on;
    private $last_login;
    private $active;
    private $first_name;
    private $last_name;
    private $rol;

    public function __construct( $username, $password, $email, $created_on, $last_login, $active, $first_name, $last_name, $rol){
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->created_on = $created_on;
        $this->last_login = $last_login;
        $this->active = $active;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->rol = $rol;
    }

    public function getUsername(){
        return $this->username;
    }

    public function getPassword(){
        return $this->password;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getCreated_on(){
        return $this->created_on;
    }

    public function getLast_login(){
        return $this->last_login;
    }

    public function getActive(){
        return $this->active;
    }

    public function getFirst_name(){
        return $this->first_name;
    }

    public function getLast_name(){
        return $this->last_name;
    }

    public function getRol(){
        return $this->rol;
    }

    public function setUsername($username){
        $this->username = $username;
    }

    public function setPassword($password){
        $this->password = $password;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function setCreated_on($created_on){
        $this->created_on = $created_on;
    }

    public function setLast_login($last_login){
        $this->last_login = $last_login;
    }

    public function setActive($active){
        $this->active = $active;
    }

    public function setFirst_name($first_name){
        $this->first_name = $first_name;
    }

    public function setLast_name($last_name){
        $this->last_name = $last_name;
    }

    public function setRol($rol){
        $this->rol = $rol;
    }



}
