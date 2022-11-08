<?php
namespace Urls;
require_once 'Usuario.php';

class Urls
{

    public function getComponentsScripts(){
        return require_once("View/components/scripts.php");
    }
    
}

?>