<h2>Añadir Usuario</h2>
<div class="container-fluid" id="capaAñadirUsuario">
    <form id="formularioAñadirUsuario" name="formularioAñadirUsuario">
        <div class="row">
            <div class="form-group col-md-6 col-sm-12">
                <label for="apellido_1">Apellido 1:</label>
                <input type="text" id="apellido_1" name="apellido_1" class="form-control" placeholder="Apellido 1" required />
            </div>
            <div class="form-group col-md-6 col-sm-12">
                <label for="apellido_2">Apellido 2:</label>
                <input type="text" id="apellido_2" name="apellido_2" class="form-control" placeholder="Apellido 2" />
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6 col-sm-12">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" required />
            </div>
            <div class="form-group col-md-6 col-sm-12">
                <label>Sexo:</label>
                <div>
                    <div class="form-check">
                        <input type="radio" id="sexoM" name="sexo" value="H" class="form-check-input" required />
                        <label for="sexoM" class="form-check-label">Hombre</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" id="sexoF" name="sexo" value="M" class="form-check-input" />
                        <label for="sexoF" class="form-check-label">Mujer</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6 col-sm-12">
                <label for="fechaAlta">Fecha de Alta:</label>
                <input type="date" id="fechaAlta" name="fechaAlta" class="form-control" required />
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6 col-sm-12">
                <label for="login">Login:</label>
                <input type="text" id="login" name="login" class="form-control" placeholder="Login" required />
            </div>
            <div class="form-group col-md-6 col-sm-12">
                <label for="mail">Email:</label>
                <input type="email" id="mail" name="mail" class="form-control" placeholder="Email" required />
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6 col-sm-12">
                <label for="movil">Móvil:</label>
                <input type="tel" id="movil" name="movil" class="form-control" placeholder="Móvil" required />
            </div>
            <div class="form-group col-md-6 col-sm-12">
                <label for="pass">Contraseña:</label>
                <input type="password" id="pass" name="pass" class="form-control" placeholder="Contraseña" required />
            </div>

            
        </div>

        <div class="row">
            <div class="form-group col-md-6 col-sm-12">
                <label>¿Activo?</label>
                <div>
                    <div class="form-check">
                        <input type="radio" id="activo" name="activo" value="S" class="form-check-input" />
                        <label for="activo" class="form-check-label">Sí</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" id="activo" name="activo" value="N" class="form-check-input" />
                        <label for="activo" class="form-check-label">No</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <button type="button" class="btn btn-primary" onclick="guardarUsuario();">
                    Guardar
                </button>
                <button type="button" class="btn btn-secondary" onclick="document.getElementById('capaEditarCrear').innerHTML = '';">
                    Cancelar
                </button>
                <span id="msjError" name="msjError" style="color:blue;"></span>
            </div>
        </div>
    </form>
</div>
