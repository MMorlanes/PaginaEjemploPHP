<h2>Añadir Usuario</h2>
<div class="container-fluid" id="capaAñadirUsuario">
    <form id="formularioAñadirUsuario" name="formularioAñadirUsuario">
        <div class="row">
            <div class="form-group col-md-6 col-sm-12">
                <label for="apellido1">Apellido 1:</label>
                <input type="text" id="apellido1" name="apellido1" class="form-control" placeholder="Apellido 1" required />
            </div>
            <div class="form-group col-md-6 col-sm-12">
                <label for="apellido2">Apellido 2:</label>
                <input type="text" id="apellido2" name="apellido2" class="form-control" placeholder="Apellido 2" />
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6 col-sm-12">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" required />
            </div>
            <div class="form-group col-md-6 col-sm-12">
                <label for="sexo">Sexo:</label>
                <select id="sexo" name="sexo" class="form-control" required>
                    <option value="" selected disabled>Seleccionar</option>
                    <option value="M">Masculino</option>
                    <option value="F">Femenino</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6 col-sm-12">
                <label for="fechaAlta">Fecha de Alta:</label>
                <input type="date" id="fechaAlta" name="fechaAlta" class="form-control" required />
            </div>
            <div class="form-group col-md-6 col-sm-12">
                <label for="mail">Email:</label>
                <input type="email" id="mail" name="mail" class="form-control" placeholder="Email" required />
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6 col-sm-12">
                <label for="movil">Móvil:</label>
                <input type="tel" id="movil" name="movil" class="form-control" placeholder="Móvil" />
            </div>
            <div class="form-group col-md-6 col-sm-12">
                <label for="login">Login:</label>
                <input type="text" id="login" name="login" class="form-control" placeholder="Login" required />
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6 col-sm-12">
                <label for="pass">Contraseña:</label>
                <input type="password" id="pass" name="pass" class="form-control" placeholder="Contraseña" required />
            </div>
            <div class="form-group col-md-6 col-sm-12">
                <label for="activo">¿Activo?</label>
                <select id="activo" name="activo" class="form-control">
                    <option value="S">Sí</option>
                    <option value="N">No</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <button type="button" class="btn btn-outline-primary"
                    onclick="guardarUsuario('Usuarios','guardarNuevoUsuario','formularioAñadirUsuario','capaResultadoAñadirUsuario')"
                    >Añadir Usuario</button>
            </div>
        </div>
    </form>
    <div class="container-fluid" id="capaResultadoAñadirUsuario"></div>
</div>