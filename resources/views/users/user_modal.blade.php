<div class="modal fade" id="modalNuevo">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    AGREGAR NUEVO USUARIO
                </h5>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" form="" id="miFormulario" method="POST" role="form">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-xs-offset-1 col-xs-4">
                            <div class="form-group" id="nombres">
                                <label for="name">
                                    Nombre :
                                </label>
                                <input class="form-control" id="nombres" name="nombres" type="text">
                                </input>
                            </div>
                        </div>
                        <div class="col-xs-offset-2 col-xs-4">
                            <div class="form-group">
                                <label for="name">
                                    Apellido :
                                </label>
                                <input class="form-control" id="apellido" name="apellido" type="text">
                                </input>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-offset-1 col-xs-4">
                            <div class="form-group">
                                <label for="name">
                                    Correo Electronico
                                </label>
                                <input class="form-control" id="email" name="email" type="email">
                                </input>
                            </div>
                        </div>
                        <div class="col-xs-offset-2 col-xs-4">
                            <div class="form-group">
                                <label for="name">
                                    Contraseña
                                </label>
                                <input class="form-control" id="contrasena" name="contrasena" type="password">
                                </input>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-offset-1 col-xs-4" id="divTelefono">
                            <div class="form-group">
                                <label for="name">
                                    Numero de Telefono
                                </label>
                                <input class="form-control" id="telefono" name="telefono" type="text">
                                </input>
                            </div>
                        </div>
                        <div class="col-xs-offset-2 col-xs-4">
                            <div class="form-group">
                                <label for="name">
                                    Codigo del Trabajador
                                </label>
                                <input class="form-control" id="codTrabajador" name="codTrabajador" type="text">
                                </input>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-offset-1 col-xs-4">
                            <div class="form-group">
                                <label for="name">
                                    Tipo de usuario
                                </label>
                                <select class="form-control" id="tipo" name="tipo">
                                    <option value="2">
                                        Usuario Comun
                                    </option>
                                    <option value="1">
                                        Administrador
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-offset-2 col-xs-4">
                            <div class="form-group">
                                <label for="name">
                                    Zona
                                </label>
                                <select class="form-control" id="cboZonaVehiculo" name="cboZonaVehiculo" onchange="ObtenerAgencia()">
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-offset-1 col-xs-4">
                            <div class="form-group">
                                <label for="name">
                                    Agencia
                                </label>
                                <select class="form-control" id="cboAgencia" name="cboAgencia">
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-offset-2 col-xs-4">
                            <div class="form-group">
                                <label for="name">
                                    Estado de usuario
                                </label>
                                <select class="form-control" id="estado" name="estado">
                                    <option value="1">
                                        Activado
                                    </option>
                                    <option value="0">
                                        Desactivado
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="col-xs-offset-1 col-xs-4">
                    <button class="btn btn-primary btn-block " data-dismiss="modal" type="button">
                        Cancelar
                    </button>
                </div>
                <div class="col-xs-offset-2 col-xs-4">
                    <button class="btn btn-secondary btn-block" id="addUser" name="addUser" type="submit">
                        Aceptar
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- EDITAR USUARIO -->
<div class="modal fade" id="modalEdit">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    ACTUALIZAR USUARIO
                </h5>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" form="" id="miEditFormulario" method="POST" role="form">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-xs-offset-1 col-xs-4">
                            <div class="form-group">
                                <label for="name">
                                    Nombre :
                                </label>
                                <input class="form-control" id="editnombres" name="editnombres" type="text">
                                </input>
                            </div>
                        </div>
                        <div class="col-xs-offset-2 col-xs-4">
                            <div class="form-group">
                                <label for="name">
                                    Apellido :
                                </label>
                                <input class="form-control" id="editapellido" name="editapellido" type="text">
                                </input>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-offset-1 col-xs-4">
                            <div class="form-group">
                                <label for="name">
                                    Correo Electronico
                                </label>
                                <input class="form-control" id="editemail" name="editemail" type="email">
                                </input>
                            </div>
                        </div>
                        <div class="col-xs-offset-2 col-xs-4">
                            <div class="form-group">
                                <label for="name">
                                    Contraseña
                                </label>
                                <input class="form-control" id="editcontrasena" name="editcontrasena" type="password">
                                </input>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-offset-1 col-xs-4">
                            <div class="form-group">
                                <label for="name">
                                    Numero de Telefono
                                </label>
                                <input class="form-control" id="edittelefono" name="edittelefono" type="text">
                                </input>
                            </div>
                        </div>
                        <div class="col-xs-offset-2 col-xs-4">
                            <div class="form-group">
                                <label for="name">
                                    Codigo del Trabajador
                                </label>
                                <input class="form-control" id="editcodTrabajador" name="editcodTrabajador" type="text">
                                </input>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-offset-1 col-xs-4">
                            <div class="form-group">
                                <label for="name">
                                    Tipo de usuario
                                </label>
                                <select class="form-control" id="edittipo" name="edittipo">
                                    <option value="2">
                                        Usuario Comun
                                    </option>
                                    <option value="1">
                                        Administrador
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-offset-2 col-xs-4">
                            <div class="form-group">
                                <label for="name">
                                    Zona
                                </label>
                                <select class="form-control" id="editzona" name="editzona" onchange="ObtenerAgencia2()">
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-offset-1 col-xs-4">
                            <div class="form-group">
                                <label for="name">
                                    Agencia
                                </label>
                                <select class="form-control" id="editagencia" name="editagencia">
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-offset-2 col-xs-4">
                            <div class="form-group">
                                <label for="name">
                                    Estado de usuario
                                </label>
                                <select class="form-control" id="editestado" name="editestado">
                                    <option value="1">
                                        Activado
                                    </option>
                                    <option value="0">
                                        Desactivado
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="row hidden">
                <div class="form-group">
                    <label for="name">
                        ID
                    </label>
                    <input class="form-control" id="editid" name="editid" type="text">
                    </input>
                </div>
            </div>
            <div class="modal-footer">
                <div class="col-xs-offset-1 col-xs-4">
                    <button class="btn btn-primary btn-block " data-dismiss="modal" type="button">
                        Cancelar
                    </button>
                </div>
                <div class="col-xs-offset-2 col-xs-4">
                    <button class="btn btn-secondary btn-block " id="editUser" type="submit">
                        Actualizar
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
