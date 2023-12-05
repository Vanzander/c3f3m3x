  <!-- Modal -->
  <div class="modal fade" id="modalLogout" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body" >
          <div class="row">
            <div class="d-flex justify-content-center">
              <h5>¿Desea cerrar su sesión?</h5>
            </div>
          </div>
          <div class="row">
            <div class="d-flex justify-content-evenly">
              <a type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">CANCELAR</>
            
              <a type="button" class="btn btn-sm btn-danger" href="<?php echo base_url(); ?>index.php/Dashboard/Logout">SALIR</a>
            </div>
          </div>
            
        </div>
        <div class="modal-footer">
          
        </div>
      </div>
      
    </div>
</div>