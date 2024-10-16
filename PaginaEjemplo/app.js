function obtenerVista(controlador, metodo, destino){
    let opciones={ method: "GET",};
    let parametros = "controlador="+controlador+"&metodo="+metodo;
    fetch("C_Frontal.php?"+parametros,opciones)
        .then(res=>{
            if(res.ok){
                return res.text();
            }
            throw new Error(res.status);
        })
        .then(vista=>{
            document.getElementById(destino).innerHTML=vista;
        })
        .catch(err=>{
            console.error("Error al pedir vista", err.message);
        })
}

function buscar(controlador, metodo, formulario, destino){
    let opciones={ method: "GET",};
    let parametros = "controlador="+controlador+"&metodo="+metodo;
    parametros+= '&'+new URLSearchParams(
                    new FormData(document.getElementById(formulario))).toString();
    fetch("C_Frontal.php?"+parametros,opciones)
        .then(res=>{
            if(res.ok){
                return res.text();
            }
            throw new Error(res.status);
        })
        .then(vista=>{
            document.getElementById(destino).innerHTML=vista;
        })
        .catch(err=>{
            console.error("Error al pedir vista", err.message);
        })
}