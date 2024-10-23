function guardarUsuario(){
    console.log('guardando');

    let opciones={ method: "GET",};
    let parametros ="controlador=Usuarios&metodo=guardarUsuario";
    parametros+= '&'+new URLSearchParams(
                    new FormData(document.getElementById('formularioAñadirUsuario'))).toString();
    fetch("C_Frontal.php?"+parametros,opciones)
        .then(res=>{
            if(res.ok){
                return res.json();
            }
            throw new Error(res.status);
        })
        .then(resultado=>{
            if(resultado.correcto=='S'){
                document.getElementById('capaEditarCrear').innerHTML=resultado.msj;
            }else{ //con error
                document.getElementById('msjError').innerHTML=resultado.msj;
            }
            //document.getElementById(destino).innerHTML=vista;
        })
        .catch(err=>{
            console.error("Error al guardar el usuario", err.message);
        })
}