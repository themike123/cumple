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
              <input class="form-control" name="nombre_estudiante" placeholder="Nombrel del Invitado">
            </div>

            <div class="form-group">
              <input class="form-control" name="nombre_tutor" placeholder="Nombre de la Madre o Padre">
            </div>

            <div class="form-group">
              <input class="form-control" name="email" placeholder="Email">
            </div>

            <div class="form-group">
              <input class="form-control" name="celular" placeholder="Número celular">
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