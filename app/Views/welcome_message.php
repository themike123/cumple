<?= $this->extend('base') ?>

<?= $this->section('content') ?>
  
  <section style="margin-left:20px; margin-right:20px;">



    <div class="container">
      
      <div class="row">		

      <img src="<?=base_url("images/invitacion.png")?>" alt="" class="img-fluid">

        <div class="col-lg-2 .d-sm-none .d-md-block"></div>

        <div class="col-lg-8 formulario-invitacio text-center" style="margin-bottom:20px; padding:15px; background: white">

          <form action="<?=base_url("home/store")?>" method="POST">

            <h1 class="theme-color">CONFIRMA TU ASISTENCIA</h1>
            <h5>Ingresa tus datos para continuar</h5>

            <div>
            <div class="form-group">
              <input class="form-control" name="nombre_estudiante" placeholder="Nombrel" required>
            </div>

            <div class="form-group">
              <input class="form-control" name="nombre_tutor" placeholder="Nombre de la Madre o Padre">
            </div>

            <div class="form-group">
              <input type="email" class="form-control" name="email" placeholder="Email" required>
            </div>

            <div class="form-group">
            <label for="person">Número de Personas</label>
              <select class="form-select" id="person" name="numero_personas" aria-label="Default select example" name="">
                <option value="2" selected>Dos</option>
                <option value="3">Tres</option>
                <option value="4">Cuatro</option>
                <option value="5">Cinco</option>
                <option value="6">Seis</option>
                <option value="7">Siete</option>
                <option value="8">Ocho</option>
                <option value="9">Nueve</option>
                <option value="10">Diez</option>
              </select>
            </div>

            </div>
            <br>
            <h2 class="theme-color">¡NO FALTES!</h2>
            <br>
            <button style="font-size: .8rem;" type="submit" class="btn btn-primary btn-lg title-arlrdbd">C O N F I R M A R</button>
          </form>
			
          <!--<div class="text-center">
            <h1 style="font-family: HARRYP; font-size:40px;">CONFIRMA TU ASISTENCIA</h1>
            <h5>El periodo de registro se ha terminado</h5>
          </div> -->
		  </div>
		  <div class="col-lg-2 .d-sm-none .d-md-block"></div>

      </div>
    </div>
  </section>
  
<?= $this->endSection() ?>