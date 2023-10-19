<div class="container">
    <div class="row">
<?php
    if(isset($validation)){
        print $validation->listErrors();
    }
?>
        <div class="col-2"></div>

        <div class="col-8">
            <form action="<?= base_url('index.php/alumno/agregar');?>" method="POST">
            <?= csrf_field()?>
                <h2>Agregar alumno</h2>

                <div class="mab-3">
                    <label for="nombre" class="form-label">Nombre(s)</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" >
                </div>

                <div class="mb-3">
                    <lable for="fechaNacimiento" class="form-label">Fecha de nacimiento</lable>
                    <input type="date" class="form-control" name="fechaNacimiento" id="fechaNacimiento" >
                </div>

                <div class="mb-3">
                    <label for="sexo">Sexo</label>
                    <select name="sexo" id="sexo" class="form-control" >
                        <option value="Hombre">Hombre</option>
                        <option value="Mujer">Mujer</option>
                    </select>
                </div>

                <div class="mb-3">
                    <select name="idGrado" class="form-control">
                        <?php foreach($grados as $grado): ?>
                            <option value="<?= $grado->idGrado?>"> <?= $grado->grado?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="mb-3">
                    <select name="idGrupo" class="form-control">
                        <?php foreach($grupos as $grupo): ?>
                            <option value="<?= $grupo->idGrupo?>"><?= $grupo->grupo?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>
            </form>


            <div class="col-2"></div>

        </div>
    </div>
</div>