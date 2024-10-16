<?php
    $getPost=array_merge($_GET, $_POST,$_FILES);

    if(isset($getPost['controlador']) && $getPost['controlador']!=''){
        //recibido controlador
        $controlador='C_'.$getPost['controlador'];
        if(file_exists('./controladores/'.$controlador.'.php')){
            //existe el controlador
            $metodo=$getPost['metodo'];
            require_once './controladores/'.$controlador.'.php';
            //require_once './controladores/'.$controlador.'.php';
            $objControlador= new $controlador();
            if(method_exists($objControlador, $metodo)){
                $objControlador->$metodo($getPost);
            }else{
                echo 'Error CF-03'; //no existe el metodo

            }
        }else{
            echo 'Error CF-NFC-02'; //no existe el fichero de controlador
        }
    }else{
        //No recibido controlador
        echo 'Error CF-01';
    }
?>