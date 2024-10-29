<?php
require_once 'modelos/Modelo.php';
require_once 'modelos/DAO.php';

class M_Usuarios extends Modelo{
    public $DAO;

    public function __construct(){
        parent::__construct(); //ejecutar constructor del padre
        $this->DAO = new DAO();
    }

    public function buscarUsuarios($filtros=array()){
        $ftexto = '';
        $factivo = '';
        $id_Usuario='';
        extract($filtros);
    
        $SQL = "SELECT * FROM usuarios WHERE 1=1";
    
        if($ftexto != ''){
            $aPalabras = explode(' ', $ftexto);
            $SQL .= ' AND (1=0';  // Cambiar 1=2 a 1=0 para que inicie la condición correctamente
            foreach($aPalabras as $palabra){
                $SQL .= " OR (nombre LIKE '%$palabra%' 
                              OR apellido_1 LIKE '%$palabra%'  
                              OR apellido_2 LIKE '%$palabra%' 
                              OR mail LIKE '%$palabra%' 
                              OR login LIKE '%$palabra%')";
            }
            $SQL .= ')';  // Cerrar el paréntesis de la condición
        }   
    
        if(isset($filtros['activo']) && $filtros['activo'] != ''){
            $factivo = $filtros['activo'];
            $SQL .= " AND activo='$factivo'";
        }
        if($id_Usuario!=''){
            $SQL.=" AND id_Usuario='$id_Usuario' ";
        }


        $SQL.=' ORDER BY apellido_1, apellido_2, nombre, login ';      
        $usuarios = $this->DAO->consultar($SQL);
        
        return $usuarios;
    }

    public function insertarUsuario($datos=Array()){
        $nombre='';
        $apellido_1='';
        $apellido_2='';
        $sexo='H';
        $fecha_Alta=date('Y-m-d');
        $mail='';
        $movil='';
        $login='hkjhkjhk';
        $pass='jhkjhkljh';
        $activo='S';
        extract($datos);

        $pass=MD5($pass);
        $SQL="INSERT INTO usuarios SET 
                nombre='$nombre',
                apellido_1='$apellido_1',
                apellido_2='$apellido_2',
                sexo='$sexo',
                fecha_Alta='$fecha_Alta',
                mail='$mail',
                movil='$movil',
                login='$login',
                pass='$pass',
                activo='$activo' ";
        return $this->DAO->insertar($SQL);
    }

    
}    





?>