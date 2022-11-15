<?php
// use front\Enums\rutas;

use front\Enum\Local;

class RutasController
{
    private $local = 'localhost';
    public function Vistas($ruta)
    {
        $rutaCompleta = explode('/', $ruta);
        $nuevo = array_pop($rutaCompleta);
        $rutaUrl = '';
        switch ($nuevo) {
            case 'recuperar.php':
                $rutaUrl = '/forms/form-recuperar.php';
                break;
            case 'registrarse.php':
                $rutaUrl = '/forms/form-registro.php';
                break;
            default:
                $rutaUrl = '/forms/portada.php';
                break;
        }

        return $rutaUrl;
    }
    public function Titulos($ruta)
    {
        $rutaCompleta = explode('/', $ruta);
        $titulo = array_pop($rutaCompleta);
        $titulo = explode('.', $titulo);
        $titulo[0] == 'login' ? ($titulo = 'entrar') : ($titulo = $titulo[0]);
        return $titulo;
    }
    public function Relative($longitud)
    {
        $rLinks = '';
        //    if($longitud>2){$longitud--;}
        for ($i = 1; $i < $longitud; $i++) {
            $rLinks = $rLinks . '../';
        }
        return $rLinks;
    }

    public function RutaLinks($ruta, $proceso)
    {
        $rutaCompleta = explode('/', $ruta);
        array_pop($rutaCompleta);
        array_shift($rutaCompleta);
        $rutaLinks = [];
        // view/components/scripts/links.php
        if ($proceso == '') {
            count($rutaCompleta) == 1
                ? array_push($rutaLinks, [
                    'script' => 'view/components/scripts/links.php',
                ])
                : array_push($rutaLinks, [
                    'script' => $this->Relative(count($rutaCompleta)),
                ]);
        } else {
            count($rutaCompleta) == 1
                ? array_push($rutaLinks, ['ruta' => "$proceso"])
                : array_push($rutaLinks, [
                    'ruta' => $this->Relative(count($rutaCompleta)) . $proceso,
                ]);
        }

        return $rutaLinks;
    }
}
$intancia = new RutasController();
?>