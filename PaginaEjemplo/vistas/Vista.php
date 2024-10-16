<?php
class Vista{
    static public function render($rutaVista, $datos=array()){
        require($rutaVista); //coge el archivo y lo mete aquí "include($rutaVista);"
    }
}

?>