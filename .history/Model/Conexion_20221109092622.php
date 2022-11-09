<?php
namespace Model;
require_once 'Usuario.php';

class Conexion
{
    private $con;
    
    public function __construct(){
        $this->con = new \mysqli('localhost', 'jairo', '12345678', 'jase');
        // $this->con = new \mysqli('10.10.17.136', 'root', '', 'jase');
    }

    public function close()
    {
        $this->con->close();
    }

    public function con()
    {
        return $this->con;
    }
}

?>
