<?php include "vistas/header.php"; ?>

<ul class="breadcrumbs">
  <li><a href=".php">Home</a></li>
  <li class="divider">/</li>
  <li><a href="#" class="active">Citas</a></li>
</ul>

<div class="card">
  <div class="card-header">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
      <i class="fa-solid fa-book-medical"></i> Agregar cita
    </button>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Agendar cita de psicología</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form class="row g-3">
              <div class="col-md-12">
                <label for="validationDefault04" class="form-label">Paciente</label>
                <select class="form-select" id="validationDefault04" required>
                  <option selected disabled value="">Selecciona...</option>
                  <option>...</option>
                </select>
              </div>

              <div class="col-md-12">
                <label for="validationDefault03" class="form-label">Fecha de cita</label>
                <input type="date" class="form-control" id="validationDefault03" required>
              </div>

              <div class="col-md-6">
                <label for="validationDefault03" class="form-label">Hora de inicio</label>
                <input type="time" class="form-control" id="validationDefault03" required>
              </div>
              <div class="col-md-6">
                <label for="validationDefault05" class="form-label">Hora de termino</label>
                <input type="time" class="form-control" id="validationDefault05" required>
              </div>

              <div class="col-12">
                <label for="validationDefault04" class="form-label">Tipo de paciente</label>
                <select class="form-select" id="validationDefault04" required>
                  <option selected disabled value="">Selecciona...</option>
                  <option>NUEVO</option>
                  <option>SUBSECUENTE</option>
                  <option>REINGRESO</option>
                  <option>ACTIVO</option>
                  <option>BAJA</option>
                </select>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary">Agendar</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="card-body">
    <h5 class="card-title d-flex justify-content-center">Citas agendadas</h5>
    <div id="tablaArchivos"></div>
  </div>
</div>


<?php include "vistas/footer.php"; ?>

<!-- <script>
  $(document).ready(function(){
    $('#tablaArchivos').load("");
  });
</script> -->