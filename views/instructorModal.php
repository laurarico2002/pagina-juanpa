<div class="modal fade" id="modalInstructor">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="titulo_modal"></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST" id="instructor_form">
                <input type="hidden" name="inst_id" id="inst_id">
                <div class="row mb-3 mx-2 my-1">
                    <label for="nombrei" class="col-sm-3 col-form-label">Nombre:</label>  
                    <div class="col">                                
                        <input class="form-control" type="text" name="nombrei" id="nombrei" placeholder="Ingrese el nombre del instructor">
                    </div>
                </div>
                <div class="row mb-3 mx-2 my-1">
                    <label for="ape_paternoi" class="col-sm-3 col-form-label">Apellido paterno:</label>
                    <div class="col">                                
                        <input class="form-control" type="text" name="ape_paternoi" id="ape_paternoi" placeholder="Ingrese el apellido paterno del instructor">
                    </div>       
                </div>
                <div class="row mb-3 mx-2 my-1">
                    <label for="ape_maternoi" class="col-sm-3 col-form-label">Apellido materno:</label>
                    <div class="col">                                
                        <input class="form-control" type="text" name="ape_maternoi" id="ape_maternoi" placeholder="Ingrese el apellido paterno del instructor">
                    </div>
                </div>     
                <div class="row mb-3 mx-2 my-1">
                    <label for="correo" class="col-sm-3 col-form-label">Correo:</label>
                    <div class="col">                                
                        <input class="form-control" type="text" name="correo" id="correo" placeholder="Ingrese el correo del instructor">
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
                        <input class="form-control" type="text" name="telefono" id="telefono" placeholder="Ingrese el telefono del instructor">
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