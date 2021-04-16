<?php
 include "helpers/insertHome.php";
 include "helpers/dataHome.php";
?>
<div class="col-10 px-4 mt-5 position-absolute top-0 end-0">

<h3 class="mt-3">Listado de Casas</h3>
<div class="mt-4 d-flex justify-content-between ">

    <div>
<<<<<<< HEAD
        <button class="btn btn-success btn-sm mr-2 " data-bs-toggle="modal" data-bs-target="#insertHome">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
  <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
</svg> Agregar
=======
        <button class="btn btn-success btn-sm mr-2" data-bs-toggle="modal" data-bs-target="#insertHome">
            <i class="fas fa-futbol"></i> Agregar
>>>>>>> ricardo
        </button>
        <button class="btn btn-primary btn-sm">
          <i class="fas fa-print"></i> Imprimr
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
    <th scope="col">N° Casa</th>
    <th scope="col">Nombre</th>
    <th scope="col">Descripción</th>
    <th scope="col">N° Habitaciones</th>
    <th scope="col">N° Baños</th>
    <th scope="col">Parqueadero</th>
    <th scope="col">Internet</th>
    <th scope="col">imagenes</th>
    <th scope="col">Acciones</th>
  </tr>
</thead>
<tbody id="tableBodyGoalDetails">
<tr>
                <th scope="row">123</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="text-center">
                <button class="btn btn-warning btn-sm mr-2" data-bs-toggle="modal" data-bs-target="#dataHome">
                <i class="fas fa-eye"></i> 
                </button>
                    <button class="btn btn-primary btn-sm" id="addGoal" idgoal="123" data-bs-toggle="modal" data-bs-target="#dataHome" data-bs-placement="top" title="Actualizar">
                       <i class="fas fa-pen"></i>
                    </button>
                    <button class="btn btn-danger btn-sm deleteGoal" idgoal="123" data-bs-toggle="tooltip" data-bs-placement="top" title="Elimnar">
                      <i class="fas fa-trash" idgoal=""></i>
                    </button>
                </td>
                </tr>
</tbody>
</table>

</div>
