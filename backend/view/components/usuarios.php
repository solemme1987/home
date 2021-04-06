<div class="col-10 bg-primary mt-5 position-absolute top-0 end-0">
    <h1>PERSONAS</h1>
</div>
<?php
 include "helpers/insertHome.php";
?>
<div class="col-10 px-4 mt-5 position-absolute top-0 end-0">

<h3 class="mt-3">personas</h3>
<div class="mt-4 d-flex justify-content-between ">

    <div>
        <button class="btn btn-success btn-sm mr-2 " data-bs-toggle="modal" data-bs-target="#insertHome">
            <i class="fas fa-futbol"></i> Agregar
        </button>
       
    </div>

    <div class="">
       <div class="alert alert-success py-0 px-5 ml-n5 fade show d-none position-absolute end-50" alert"="" id="successInsert"> <strong>Registro!</strong> Exitoso
       </div>
    </div>

    <div>
      <h4>
        Casas
        <i class="fas fa-futbol text-primary"></i> 
        <span class="text-danger" id="totalGoals">122</span> 
      </h4>
    </div>
</div>

<table class="table  table-striped table-bordered table-hover mt-2">
<thead>
  <tr>
    
    <th scope="col">Nombre</th>
    <th scope="col">Apellido</th>
    <th scope="col">email</th>
    <th scope="col">Contraseña</th>
    <th scope="col">Terminos de Uso</th>
    <th scope="col">Ciudad</th>
    <th scope="col">Acciones</th>
  </tr>
</thead>
<tbody id="tableBodyGoalDetails">
<tr>
                <th scope="row">123</th>
                <td>51</td>
                <td>Nani</td>
                <td>Portugal</td>
                <td>N</td>
                <td>2</td>
                <td>F</td>
                <td class="text-center">
                    <button class="btn btn-primary btn-sm" id="addGoal" idgoal="123" data-bs-toggle="modal" data-bs-target="#deleteGoal" data-bs-placement="top" title="Actualizar">
                       <i class="fas fa-pen"></i>
                    </button>
                    <button class="btn btn-danger btn-sm deleteGoal" idgoal="123" data-bs-toggle="tooltip" data-bs-placement="top" title="Elimnar">
                      <i class="fas fa-trash" idgoal="123"></i>
                    </button>
                </td>
                </tr>
</tbody>
</table>

</div>
