<?php
// use front\Enums\rutas;

use front\Enum\Local;

class RutasController
{
    private $local = "localhost";
    public function Vistas($ruta)
    {
        $rutaCompleta = explode('/', $ruta);
        $nuevo = array_pop($rutaCompleta);
        $rutaUrl = '';
        switch ($nuevo) {
            case 'recuperar.php':
                $rutaUrl =  '/forms/form-recuperar.php';
                break;
            case 'registrarse.php':
                $rutaUrl = '/forms/form-registro.php';
                break;
            default:
                $rutaUrl ='/forms/portada.php';
                break;

        }

        return $rutaUrl;
    }
    Public function Titulos($ruta){
        $rutaCompleta = explode('/', $ruta);
        $titulo = array_pop($rutaCompleta);
        $titulo = explode('.', $titulo);
        $titulo[0] == "login" ? $titulo = "entrar": $titulo = $titulo[0];
        return $titulo;

    }
    public function Relative($longitud ){
        $rLinks="";
        for($i =1; $i<$longitud; $i++){
            $rLinks = $rLinks
            . "../";
        }
        return $rLinks;
    }

    public function RutaLinks($ruta, $proceso){
        $rutaCompleta = explode('/', $ruta);
        array_pop($rutaCompleta);
        array_shift($rutaCompleta);
        $rutaLinks= array();
        // view/components/scripts/links.php
        if($proceso == ''){
        count($rutaCompleta) ==1 ? 
        (array_push($rutaLinks ,array("script" =>"view/components/scripts/links.php"))) :
        ( array_push($rutaLinks , array("script" => $this->Relative(count($rutaCompleta)))) )
         ;
        }else{
          
        count($rutaCompleta) ==1 ? 
        (array_push($rutaLinks ,array("ruta" =>"$proceso"))) :
        ( array_push($rutaLinks , array("ruta" => $this->Relative(count($rutaCompleta)).$proceso)) )
         ;

        }
        
    
        return $rutaLinks;

    }
    

}
$intancia = new RutasController;
?>