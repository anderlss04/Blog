<?php
namespace Url;
require_once 'Usuario.php';

class Conexion
{
    private $con;
    
    public function __construct(){
        $this->con = new \mysqli('localhost', 'root', '', 'jase');
        // $this->con = new \mysqli('10.10.17.136', 'root', '', 'jase');
    }
    
    public function close() {
        $this->con->close();
    }
    
    public function con(){
        return $this->con;
    }
}




?>