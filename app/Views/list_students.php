<?= $this->extend('base') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col-md-12" style="color:white;">
            
            <div class="text-center">
                <br>
                <h2>Lista de invitados</h2>
                <br>
            </div>

            <div class="table-responsive" >
                <table class="table" style="color:white;">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Tutor</th>
                        <th scope="col">Email</th>
                        <th scope="col">Celular</th>                        
                        <!--th scope="col">Domicilio</th>
                        <th scope="col">Referencias</th-->
                        </tr>
                    </thead>
                    <tbody>
                        <?php $number =1; ?>
                        <?php foreach ($data as $row) { ?>
                        <tr>
                            <th scope="row"> <?= $number; ?> </th>
                            <td><?= $row['nombre'] ?></td>
                            <td><?= $row['nombre_tutor']?></td>
                            <td><?= $row['email']?></td>
                            <td><?= $row['celular']?></td>
                            <!--td><?= $row['domicilio']?></td>
                            <td><?= $row['referencia']?></td-->
                        </tr>
                        <?php $number = $number +1; } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>