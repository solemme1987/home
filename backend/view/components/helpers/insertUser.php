<div class="modal fade" id="insertUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
         <img src="view/assets/img/copa.png" alt="imagen aqui" class="img-fluid mr-2" width="35px">
         <h5 class="modal-title " id="exampleModalLabel"> AGREGAR </h5>
        <button type="button" class="btn-close" id="closeModal" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

         <form id='goalDetailsForm'>

                 <div class="input-group flex-nowrap mb-3">
                    <span class="input-group-text " id="addon-wrapping" >Nombre</span>
                    <input type="text" class="form-control" name="nombre" id="nombrePersons" placeholder="Nombre" 
                    aria-label="usuarios"  aria-describedby="addon-wrapping">
                 </div>

                 <div class="input-group flex-nowrap mb-3">
                    <span class="input-group-text " id="addon-wrapping" >Apellido</span>
                    <input type="text" class="form-control" name="Apellido" id="ApellidoPersons" placeholder="Apellido" 
                    aria-label="usuarios"  aria-describedby="addon-wrapping">
                 </div>

                 <div class="input-group flex-nowrap mb-3">
                    <span class="input-group-text " id="addon-wrapping" >email</span>
                    <input type="text" class="form-control" name="email" id="N° emailPersons" placeholder="email" 
                    aria-label="usuario"  aria-describedby="addon-wrapping">
                 </div>

                 <div class="input-group flex-nowrap mb-3">
                    <span class="input-group-text " id="addon-wrapping" >Contraseña</span>
                    <input type="text" class="form-control" name="Contraseña" id="ContraseñaPersons" placeholder="Contraseña" 
                    aria-label="usuario"  aria-describedby="addon-wrapping">
                 </div>

                 <div class="input-group flex-nowrap mb-3">
                    <span class="input-group-text " id="addon-wrapping" >Terminos de Uso</span>
                    <input type="text" class="form-control" name="Terminos " id="terminos Persons" placeholder="Terminos de Uso" 
                    aria-label="usuario"  aria-describedby="addon-wrapping">
                 </div>

                 <div class="input-group flex-nowrap mb-3">
                    <span class="input-group-text " id="addon-wrapping" >Ciudad</span>
                    <input type="text" class="form-control" name="Ciudad" id="Ciudad Persons" placeholder="Ciudad" 
                    aria-label="usuario"  aria-describedby="addon-wrapping">
                 </div>
        </div>

        <div class="modal-footer">
            <button type="button"id="insertGoalDetail" class="btn btn-primary">Agregar</button>
            </form>
        </div>

    </div>
  </div>
</div>