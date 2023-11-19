<div class="modal fade" id="modalCategoria">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="titulo_modal"></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST" id="categoria_form">
                <input type="hidden" name="id" id="id">
                <div class="row mx-2 my-1">                    
                  <label for="nombre" class="col-sm-2 col-form-label">Categoria:</label>
                  <div class="col">
                     <input class="form-control" type="text" name="nombre" id="nombre" placeholder="Ingrese una categoria">
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
  