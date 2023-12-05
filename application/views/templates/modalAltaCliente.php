  <!-- Modal -->
  <div class="modal fade" id="modalAltaCliente" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h3>Alta de clientes express</h3>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
            <form method="POST"  action="<?php echo base_url(); ?>index.php/Cotizador/addCliente">
              <div class="mb-3 mt-3">
                <label for="nombre" class="form-label">Nombre(s):</label>
                <input type="text" class="form-control" id="nombre" name="nombre">
              </div>
              <div class="mb-3 mt-3">
                <label for="apePat" class="form-label">Apellido Paterno:</label>
                <input type="text" class="form-control" id="apePat" name="apePat">
              </div>
              <div class="mb-3 mt-3">
                <label for="apeMat" class="form-label">Apellido Materno:</label>
                <input type="text" class="form-control" id="apeMat" name="apeMat">
              </div>
              <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email">
              </div>
              <div class="mb-3 mt-3">
                <label for="tel" class="form-label">Teléfono:</label>
                <input type="text" class="form-control" id="tel" name="tel">
              </div>
              <!-- <div class="form-check mb-3">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox" name="remember"> Remember me
                </label>
              </div> -->
                <button type="submit" class="btn btn-primary">Agregar</button>
              </form>
        </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
       
      </div>
      
    </div>
</div>