<div class="modal fade" id="insertHome" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <input type="text" class="form-control" name="nombre" id="nombreHome" placeholder="Nombre Casa" 
                    aria-label="homeName"  aria-describedby="addon-wrapping">
                 </div>

                 <div class="input-group flex-nowrap mb-3">
                    <span class="input-group-text " id="addon-wrapping" >Descripcion</span>
                    <input type="text" class="form-control" name="Descripcion" id="DescripcionHome" placeholder="Descripcion Casa" 
                    aria-label="homeName"  aria-describedby="addon-wrapping">
                 </div>

                 <div class="input-group flex-nowrap mb-3">
                    <span class="input-group-text " id="addon-wrapping" >N° Habitaciones</span>
                    <input type="text" class="form-control" name="N° Habitaciones" id="N° HabitacionesHome" placeholder="N° Habitaciones Casa" 
                    aria-label="homeName"  aria-describedby="addon-wrapping">
                 </div>

                 <div class="input-group flex-nowrap mb-3">
                    <span class="input-group-text " id="addon-wrapping" >N° Baños</span>
                    <input type="text" class="form-control" name="N° Baños" id="N° BañosHome" placeholder="N° Baños Casa" 
                    aria-label="homeName"  aria-describedby="addon-wrapping">
                 </div>

                 <div class="input-group flex-nowrap mb-3">
                    <span class="input-group-text " id="addon-wrapping" >Parqueadero </span>
                    <input type="text" class="form-control" name="Parqueadero " id="Parqueadero Home" placeholder="Parqueadero Casa" 
                    aria-label="homeName"  aria-describedby="addon-wrapping">
                 </div>

                 <div class="input-group flex-nowrap mb-3">
                    <span class="input-group-text " id="addon-wrapping" >Internet</span>
                    <input type="text" class="form-control" name="Internet" id="InternetHome" placeholder="Internet Casa" 
                    aria-label="homeName"  aria-describedby="addon-wrapping">
                 </div>

                 <div class="mb-3">
                   <label for="formFileMultiple" class="form-label">subir imagenes de la casa</label>
                   <input class="form-control" type="file" name="file[]" multiple>
                    <button type="button" onclick="subir()" class="btn btn-primary form-control" >Cargar</button>
                 </div>
                 
</form>
        </div>

        <div class="modal-footer">
            <button type="button"id="insertGoalDetail" class="btn btn-primary">Agregar</button>
            </form>
        </div>

    </div>
  </div>
</div>