<h2>Mtto. de Usuarios</h2>
<div class="container-fluid" id="capaFiltrosBusqueda">
    <form id="formularioBuscar" name="formularioBusqueda">
    <div class="row">
        <div class="form-group col-md-6 col-sm-12">
        <label for="ftexto">Nombre/texto:</label>
        <input type="text" id="ftexto" name="ftexto"
        class="form-control" placeholder="Texto a buscar" value=""/>
    </div>
    <div class="form-group col-md-6 col-sm-12">
        <label for="factivo">Estado:</label>
        <select id="factivo" name="factivo"
        class="form-control">
        <option value="" selected>Todos</option>
        <option value="S">Activos</option>
        <option value="N">No activos</option>
        </select>
    </div>
</div>
</div>

<div class="row">
    <div class="col-lg-12">
        <button type="button" class="btn btn-outline-primary" 
        onclick="buscar('Usuarios', 'getVistaListadoUsuarios'
        , 'formularioBuscar', 'capaResultadosBusqueda')">Buscar</button>

        <button type="button" class="btn btn-outline-secundary" 
        onclick="obtenerVista('Usuarios', 'getVistaNuevoEditar'
        ,'capaEditarCrear')">Nuevo</button>
    </div>
</div>
</form>
<div class="container-fluid" id="capaResultadosBusqueda"></div>
<div class="container-fluid" id="capaEditarCrear"></div>