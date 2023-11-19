<div class="modal fade" id="modalUsuario">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="titulo_modal"></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST" id="usuario_form">
                <input type="hidden" name="usu_id" id="usu_id">
                <div class="row mb-3 mx-2 my-1">
                    <label for="nombre" class="col-sm-3 col-form-label">Nombre:</label>  
                    <div class="col">                                
                        <input class="form-control" type="text" name="nombre" id="nombre" placeholder="Ingrese el nombre del usuario">
                    </div>
                </div>
                <div class="row mb-3 mx-2 my-1">
                    <label for="ape_paterno" class="col-sm-3 col-form-label">Apellido paterno:</label>
                    <div class="col">                                
                        <input class="form-control" type="text" name="ape_paterno" id="ape_paterno" placeholder="Ingrese el apellido paterno del usuario">
                    </div>       
                </div>
                <div class="row mb-3 mx-2 my-1">
                    <label for="ape_materno" class="col-sm-3 col-form-label">Apellido materno:</label>
                    <div class="col">                                
                        <input class="form-control" type="text" name="ape_materno" id="ape_materno" placeholder="Ingrese el apellido paterno del usuario">
                    </div>
                </div>     
                <div class="row mb-3 mx-2 my-1">
                    <label for="usu_correo" class="col-sm-3 col-form-label">Correo:</label>
                    <div class="col">                                
                        <input class="form-control" type="text" name="usu_correo" id="usu_correo" placeholder="Ingrese el correo del usuario">
                    </div>
                </div>
                <div class="row mb-3 mx-2 my-1">
                    <label for="usu_pass" class="col-sm-3 col-form-label">Contraseña:</label>
                    <div class="col">                                
                        <input class="form-control" type="text" name="usu_pass" id="usu_pass" placeholder="Ingrese el correo del usuario">
                    </div>
                </div>
                <div class="row mb-3 mx-2 my-1">
                    <label for="sexo" class="col-sm-3 col-form-label">Sexo:</label>
                    <div class="col">                                
                        <select class="form-control select2" name="sexo" id="sexo" data-placeholder="Seleccione">
                            <option label="Seleccione"></option>
                            <option value="F">Femenino</option>
                            <option value="M">Masculino</option>
                        </select>
                    </div>                    
                </div>
                <div class="row mb-3 mx-2 my-1">
                    <label for="telefono" class="col-sm-3 col-form-label">Telefono:</label>
                     <div class="col">                                
                        <input class="form-control" type="text" name="telefono" id="telefono" placeholder="Ingrese el telefono del usuario">
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="reset" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary" name="action" value="add">Guardar</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
  </div>
