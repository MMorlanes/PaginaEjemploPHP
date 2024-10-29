<?php
// $usuarios=$datos['usuarios'];
$usuarios=array();
extract($datos);


$html='';
$html.='<div class="table-responsive">
        <table class="table table-sm table-striped">';
$html.='<thead>
            <tr>
                <th>apellidos, nombre</th>
                <th>mail</th>
                <th>login</th>
                <th>¿Activo?</th>
            </tr>
        </thead>
        </tbody>';
$activo='';
foreach($usuarios as $posicion=>$fila){
    // echo $fila['nombre'];
$estilo='';    
if($fila['activo']=='N'){
    $activo='Inactivo';
    $estilo='color:red;';
}else{
    $activo='';
}    
    $html.='<tr>
                <td><img src="img/edit.png" style="height:1.2em; margin:auto;"
                onclick="obtenerVista_EditarCrear(\'Usuarios\',\'getVistaNuevoEditar\',\'capaEditarCrear\', \''.$fila['id_Usuario'].'\')"></td>
                <td nowrap style="'.$estilo.'">'.$fila['apellido_1'].' '.$fila['apellido_2']
                    .', '.$fila['nombre']
                .'</td>
                <td style="'.$estilo.'">'.$fila['mail'].'</td>
                <td style="'.$estilo.'">'.$fila['login'].'</td>
                <td style="'.$estilo.'">'.$activo.'</td>
            </tr>';          
} 
$html.= '</tbody>
    <table>';
echo $html;
?>