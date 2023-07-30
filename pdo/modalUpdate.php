<!-- Modal -->
<div class="modal fade" id="actualizarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form id="frminsertu" onsubmit="return actualizarDatos()" method="post">
              <input type="text" id="id" name="id" hidden="">
              <label>Nombre</label>
              <input type="text" id="nombreu" name="nombreu" class="form-control form-control-sm" required="">
              <label>Usuario</label>
              <input type="text" id="usuariou" name="usuariou" class="form-control form-control-sm" required="">
              <label>Email</label>
              <input type="text" id="emailu" name="emailu" class="form-control form-control-sm" required="">
              <label>Contraseña</label>
              <input type="text" id="passwordu" name="passwordu" class="form-control form-control-sm" required="">
              <label>Privilegio</label>
              <input type="text" id="privilegiou" name="privilegiou" class="form-control form-control-sm" required="">
              <br>
               <input type="submit" value="Actualizar" class="btn btn-warning">
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>
