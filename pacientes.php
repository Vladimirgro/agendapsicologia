<?php include "vistas/header.php"; ?>

<ul class="breadcrumbs">
  <li><a href="#">Home</a></li>
  <li class="divider">/</li>
  <li><a href="#" class="active">Pacientes</a></li>
</ul>

<div class="card">
  <div class="card-header">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
      <i class="fa-solid fa-book-medical"></i> Agregar paciente
    </button>

    <div class="modal modal-lg fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Alta de paciente</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="servidor/paciente/regpaciente.php" method="post" class="row g-3">
              <div class="col-md-4">
                <label for="validationDefault01" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese nombre" required>
              </div>
              <div class="col-md-4">
                <label for="validationDefault02" class="form-label">Apellido paterno</label>
                <input type="text" class="form-control" id="apaterno" name="apaterno" placeholder="Ingrese apellido" required>
              </div>
              <div class="col-md-4">
                <label for="validationDefault03" class="form-label">Apellido materno</label>
                <input type="text" class="form-control" id="amaterno" name="amaterno" placeholder="Ingrese apellido" required>
              </div>
              <div class="col-md-4">
                <label for="validationDefault03" class="form-label">Edad</label>
                <input type="number" class="form-control" id="edad" name="edad" placeholder="Ingrese edad" required>
              </div>
              <div class="col-md-4">
                <label for="validationDefault04" class="form-label">Sexo</label>
                <select class="form-select" id="sexo" name="sexo" required>
                  <option selected disabled value="">Selecciona...</option>
                  <option>FEMENINO</option>
                  <option>MASCULINO</option>
                </select>
              </div>
              <div class="col-md-4">
                <label for="validationDefault03" class="form-label">Escolaridad</label>
                <select class="form-select" id="escolaridad" name="escolaridad" required>
                  <option selected disabled value="">Selecciona...</option>
                  <option>PRIMARIA</option>
                  <option>SECUNDARIA</option>
                  <option>BACHILLERATO</option>
                  <option>LICENCITURA</option>
                  <option>POSGRADO</option>
                  <option>NO APLICA</option>
                </select>
              </div>
              <div class="col-md-4">
                <label for="validationDefault03" class="form-label">Ocupación</label>
                <input type="text" class="form-control" id="ocupacion" name="ocupacion" placeholder="Ingrese ocupación" required>
              </div>
              <div class="col-md-4">
                <label for="validationDefault04" class="form-label">Tipo de paciente</label>
                <select class="form-select" id="tpaciente" name="tpaciente" required>
                  <option selected disabled value="">Selecciona...</option>
                  <option>NUEVO</option>
                  <option>SUBSECUENTE</option>
                  <option>REINGRESO</option>
                  <option>ACTIVO</option>
                  <option>BAJA</option>
                </select>
              </div>
              <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary text-uppercase">Agregar</button>
          </div>
            </form>
          </div>
          
        </div>
      </div>
    </div>
  </div>
  <div class="card-body">
    <h5 class="card-title d-flex justify-content-center">Listado de pacientes de psicología</h5>
    <div id="tablaArchivos"></div>
  </div>
</div>


<?php include "vistas/footer.php"; ?>

<!-- <script>
  $(document).ready(function(){
    $('#tablaArchivos').load("");
  });
</script> -->