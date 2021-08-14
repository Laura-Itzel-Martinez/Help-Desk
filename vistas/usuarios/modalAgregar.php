
<!-- Modal -->
<form id="frmAgregarUsuario"  method="post" onsubmit="return agregarNuevoUsuario()">
    <div class="modal fade" id="modalAgregarUsuarios" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Nuevo Usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="paterno">Apellido paterno</label>
                            <input type="text" class="form-control" name="paterno" id="paterno" required>
                        </div>
                        <div class="col-sm-4">
                            <label for="materno">Apellido materno</label>
                            <input type="text" class="form-control" name="materno" id="materno" required>
                        </div>
                        <div class="col-sm-4">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="fechaNacimiento">Fecha de Nacimiento</label>
                            <input type="date" class="form-control" name="fechaNacimiento" id="fechaNacimiento">
                        </div>
                        <div class="col-sm-4">
                            <label for="sexo">Sexo</label>
                            <select class="form-control" name="sexo" id="sexo" required>
                                <option value=""></option>
                                <option value="F">Femenino</option>
                                <option value="M">Masculino</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <label for="telefono">Telefono</label>
                            <input type="text" class="form-control" name="telefono" id="telefono" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="correo">Correo</label>
                            <input type="mail" class="form-control" name="correo" id="correo" required>
                        </div>
                        <div class="col-sm-4">
                            <label for="usuario">Usuario</label>
                            <input type="text" class="form-control" name="usuario" id="usuario" required>
                        </div>
                        <div class="col-sm-4">
                            <label for="password">Password</label>
                            <input type="text" class="form-control" name="password" id="password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="idRol">Rol de Usuario</label>
                            <select name="idRol" id="idRol" class="form-control">
                                <option value="1">Cliente</option>
                                <option value="2">Administrador</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="ubicacion">Ubicacion</label>
                            <textarea name="ubicacion" id="ubicacion" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <span  class="btn btn-secondary" data-dismiss="modal">Cerrar</span>
                    <button class="btn btn-primary">Agregar</button>
                </div>
            </div>
        </div>
    </div>
</form>