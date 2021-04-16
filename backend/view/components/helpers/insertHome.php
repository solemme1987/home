<?php
   // $home = new HomeController();
   // $home->insertHomeController();
?>
<div class="modal fade" id="insertHome" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
         <img src="view/assets/img/logo.png" alt="imagen aqui" class="img-fluid mr-2" width="35px">
<<<<<<< HEAD
         <h5 class="modal-title " id="exampleModalLabel"> AGREGAR </h5>
=======
         <h5 class="modal-title " id="exampleModalLabel"> AGREGAR CASA</h5>
>>>>>>> ricardo
        <button type="button" class="btn-close" id="closeModal" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

         <form method="post" enctype="multipart/form-data" id="homeForm">

                 <div class="input-group flex-nowrap mb-3">
                    <span class="input-group-text " id="addon-wrapping" >Nombre</span>
                    <input type="text" class="form-control" name="homeName" id="homeName" placeholder="Nombre de la Casa" 
                    aria-label="homeName"  aria-describedby="addon-wrapping">
                 </div>

                 <div class="input-group flex-nowrap mb-3">
                    <span class="input-group-text " id="addon-wrapping" >Descripcion</span>
                    <input type="text" class="form-control" name="descriptionHome" id="descriptionHome" placeholder="Descripcion Casa" 
                    aria-label="descriptionHome"  aria-describedby="addon-wrapping">
                 </div>

                 <div class="input-group flex-nowrap mb-3">
                    <span class="input-group-text " id="addon-wrapping" >N° Habitaciones</span>
                    <input type="number" class="form-control" name="numberRooms" id="numberRooms" placeholder="N° Habitaciones Casa" 
                    aria-label="numberRooms"  aria-describedby="addon-wrapping">
                 </div>

                 <div class="input-group flex-nowrap mb-3">
                    <span class="input-group-text " id="addon-wrapping" >N° Baños</span>
                    <input type="number" class="form-control" name="bathrooms" id="battRooms" placeholder="N° Baños Casa" 
                    aria-label="bathRooms"  aria-describedby="addon-wrapping">
                 </div>

                 <div class="input-group flex-nowrap mb-3">
                    <span class="input-group-text " id="addon-wrapping" >Parqueadero </span>
                    <select class="form-select"  id="parking" name="parking" required>
                        <option  value="si">Si</option>
                        <option selected value="no">No</option>
                    </select>
                 </div>

                 <div class="input-group flex-nowrap mb-3">
                    <span class="input-group-text " id="addon-wrapping" >Internet</span>
                    <select class="form-select"  id="internet" name="internet" required>
                        <option  value="si">Si</option>
                        <option selected value="no">No</option>
                    </select>
                 </div>

<<<<<<< HEAD
                 <div class="mb-3">
                   <label for="formFileMultiple" class="form-label">subir imagenes de la casa</label>
                   <input class="form-control" type="file" name="file[]" multiple>
                 </div>

                 <div class="mb-3">
                   <label for="exampleFormControlTextarea1" class="form-label">Servicios adicional de la casa</label>
                   <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                 </div>
                 
         </form>
      </div>
=======

                 <div class="multimedia dropzone needsclick dz-clickable  input-group flex-nowrap mb-3">
                   <div class="dz-message needsclick">
                        <button type="button" class="dz-button">Arrastre sus imagens aqui.formato JPG y  PNG</button><br>
                        <span class="note needsclick">(Maximo  <strong>10 imagens</strong> Peso de 2MB por imagen)</span>
                     </div>
                 </div>


                 <div class="input-group flex-nowrap mb-3">
                    <span class="input-group-text " id="addon-wrapping" >Precio $</span>
                    <input type="text" class="form-control" name="price" id="price" placeholder="Precio alquiler" 
                    aria-label="price  aria-describedby="addon-wrapping">
                 </div>

        </div>
>>>>>>> ricardo

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary" id="sendHome">Agregar</button>
            </form>
        </div>

    </div>
  </div>
</div>


