<!--Modal LOGIN-->
<!-- The Modal -->
<div class="modal fade" id="showModal">
  <div class="modal-dialog modal-dialog-centered"> <!-- tamaños: modal-sm | modal-lg | default son medianos    CENTRAR MODAL: modal-dialog-centered-->
    <div class="modal-content">
  
      <!-- Modal Header -->
      <div class="modal-header py-1">
        <img class="d-block mx-auto" src="assets/img/logos_st/escudo.png" alt="">
      </div>
  
      <!-- Modal body -->
      <div class="modal-body">
        <form method="POST" action="{{ route('login') }}">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text bg-primary text-white"><i class="fas fa-user-tie fa-lg"></i></span>
            </div>
            <input type="text" name="dui" class="form-control" placeholder="DUI">
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text bg-primary text-white"><i class="fas fa-key fa-lg"></i></span>
            </div>
            <input type="password" name="password" class="form-control" placeholder="Contraseña">
          </div>
          <div>
            <button class="btn btn-primary">Ingresar</button>
          </div>
        </form>
      </div>
  
      <!-- Modal footer -->
      <div class="modal-footer d-flex justify-content-between align-items-baseline">
        <a href="#"> ¿Has olvidado tu contraseña?</a>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>