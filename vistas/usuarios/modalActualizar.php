
<!-- Modal -->
<form id="frmActualizarUsuario"  method="post" onsubmit="return actualizarUsuario()">
    <div class="modal fade" id="modalActualizarUsuarios" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Actualizar Usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="text" id="idUsuario" name="idUsuario" hidden>
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="paternou">Apellido paterno</label>
                            <input type="text" class="form-control" name="paternou" id="paternou" required>
                        </div>
                        <div class="col-sm-4">
                            <label for="maternou">Apellido materno</label>
                            <input type="text" class="form-control" name="maternou" id="maternou" required>
                        </div>
                        <div class="col-sm-4">
                            <label for="nombreu">Nombre</label>
                            <input type="text" class="form-control" name="nombreu" id="nombreu" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="fechaNacimientou">Fecha de Nacimiento</label>
                            <input type="date" class="form-control" name="fechaNacimientou" id="fechaNacimientou">
                        </div>
                        <div class="col-sm-4">
                            <label for="sexou">Sexo</label>
                            <select class="form-control" name="sexou" id="sexou" required>
                                <option value=""></option>
                                <option value="F">Femenino</option>
                                <option value="M">Masculino</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <label for="telefonou">Telefono</label>
                            <input type="text" class="form-control" name="telefonou" id="telefonou" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="correou">Correo</label>
                            <input type="mail" class="form-control" name="correou" id="correou" required>
                        </div>
                        <div class="col-sm-4">
                            <label for="usuariou">Usuario</label>
                            <input type="text" class="form-control" name="usuariou" id="usuariou" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="idRolu">Rol de Usuario</label>
                            <select name="idRolu" id="idRolu" class="form-control">
                                <option value="1">Cliente</option>
                                <option value="2">Administrador</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="ubicacionu">Ubicacion</label>
                            <textarea name="ubicacionu" id="ubicacionu" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary">Actualizar</button>
                </div>
            </div>
        </div>
    </div>
</form>