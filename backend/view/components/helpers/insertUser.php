<div class="modal fade" id="insertUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <img src="view/assets/img/logo.png" alt="imagen aqui" class="img-fluid mr-2" width="35px">
            <h5 class="modal-title " id="exampleModalLabel"> AGREGAR USUARIO </h5>
            <button type="button" class="btn-close" id="closeModal" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">

            <form id='goalDetailsForm'>
               <div class="input-group flex-nowrap mb-3">
                  <span class="input-group-text " id="addon-wrapping">Nombres</span>
                  <input type="text" class="form-control" name="nombre" id="nombrePersons" placeholder="Ingrese su nombre" aria-label="usuarios" aria-describedby="addon-wrapping">
               </div>

               <div class="input-group flex-nowrap mb-3">
                  <span class="input-group-text " id="addon-wrapping">Apellidos</span>
                  <input type="text" class="form-control" name="Apellido" id="ApellidoPersons" placeholder="Ingrese su apellido" aria-label="usuarios" aria-describedby="addon-wrapping">
               </div>

               <div class="input-group flex-nowrap mb-3">
                  <span class="input-group-text " id="addon-wrapping">Correo</span>
                  <input type="email" class="form-control" name="email" id="emailPersons" placeholder="Ingrese su correo electrónico" aria-label="usuarios" aria-describedby="addon-wrapping">
               </div>

               <div class="input-group flex-nowrap mb-3">
                  <span class="input-group-text " id="addon-wrapping">Contraseña</span>
                  <input type="password" class="form-control" name="contraseña" id="contraseñaPersons" placeholder="Ingrese su contraseña" aria-label="usuarios" aria-describedby="addon-wrapping">
               </div>

               <div class="input-group flex-nowrap mb-3">
                  <span class="input-group-text ">Ciudad</span>
                  <select class="form-select" id="player" name="player" required>

                     <option selected>Seleccione la Ciudad</option>
                     <option value="1">Bogotá</option>
                     <option value="2">Medellín</option>
                     <option value="3">Cali</option>
                     <option value="4">Barranquilla</option>
                     <option value="5">Cartagena</option>
                     <option value="6">Cúcuta</option>
                     <option value="7">Soledad</option>
                     <option value="8">Ibague</option>
                     <option value="9">Bucaramanga</option>
                     <option value="10">SantaMarta</option>
                     <option value="11">Villavicencio</option>
                     <option value="12">Soacha</option>
                     <option value="13">Pereira</option>
                     <option value="14">Bello</option>
                     <option value="15">Valledupar</option>
                     <option value="16">Montería</option>
                     <option value="17">Pasto</option>
                     <option value="18">Manizales </option>
                     <option value="19">Buenaventura</option>
                     <option value="20">Neiva</option>
                     <option value="21">Barrancabermeja</option>
                     <option value="22">Palmira</option>
                     <option value="23">Armenia</option>
                     <option value="24">Popayán</option>
                     <option value="25">Sincelejo</option>
                     <option value="26">Itagui</option>
                     <option value="27">Floridablanca</option>
                     <option value="28">Riohacha</option>
                     <option value="29">Envigado</option>
                     <option value="30">Tulua</option>
                     <option value="31">Dosquebradas</option>
                     <option value="32">San Andres de Tumaco</option>
                     <option value="33">Tunja</option>
                     <option value="34">Girón</option>
                     <option value="35">Apartadó</option>
                     <option value="36">Florencia</option>
                     <option value="37">Uribia</option>
                     <option value="38">Ipiales</option>
                     <option value="39">Turbo</option>
                     <option value="40">Maicao</option>
                     <option value="41">Piedecuesta</option>
                     <option value="42">Yopal</option>
                     <option value="43">Ocaña</option>
                     <option value="44">Fusagasugá</option>
                     <option value="45">Cartago</option>
                     <option value="46">Facatativá</option>
                     <option value="47">Chía</option>
                     <option value="48">Magangué</option>
                     <option value="49">Pitalito</option>
                     <option value="50">Caucasia</option>
                     <option value="51">Zipaquirá</option>
                     <option value="52">Malambo</option>
                     <option value="53">Rionegro</option>
                     <option value="54">Lorica</option>
                     <option value="55">Jamundi</option>
                     <option value="56">Quibdó</option>
                     <option value="57">Buga</option>
                     <option value="58">Yumbo</option>
                     <option value="60">Duitama</option>
                     <option value="61">Girardot</option>
                     <option value="62">Ciénaga</option>
                  </select>
               </div>

               <div class="input-group flex-nowrap mb-3">
                  <a class="" href="#" tabindex="-1" aria-disabled="true">Terminos de Uso</a>
               </div>

               <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="true" name="terminos" id="terminosuser">
                  <label class="form-check-label" for="flexCheckDefault">He leído y acepto los terminos de uso</label>
               </div>

               <div class="modal-footer">
                  <button type="button" id="insertGoalDetail" class="btn btn-primary">Agregar</button>
               </div>

            </form>
         </div>

      </div>
   </div>
</div>