<?php
namespace Model;
require_once 'Usuario.php';

class Conexion
{
    private $con;
    
    public function __construct(){
        $this->con = new \mysqli('10.10.167.13', 'root', '', 'jase');
    }
    
    public function close() {
        $this->con->close();
    }
    
    public function con(){
        return $this->con;
    }
}




?>