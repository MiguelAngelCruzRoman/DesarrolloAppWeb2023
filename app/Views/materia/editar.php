<div class="container">
    <div class="row">

        <div class="col-2"></div>

        <div class="col-8">
            <form action="<?= base_url('index.php/materia/update');?>" method="POST">
            <?= csrf_field()?>
                <h2>Editar materia</h2>

                <input type="hidden" name="idMateria" value="<?=$materia->idMateria?>">

                <div class="mab-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" value="<?= $materia->nombre?>" required pattern="[A-Z]" max_length="50" min_length="5">
                </div>

                <div class="mab-3">
                    <lable for="nombreCorto" class="form-label">Nombre corto</lable>
                    <input type="text" class="form-control" name="nombreCorto" id="nombreCorto" value="<?= $materia->nombreCorto?>" required pattern="[A-Z]" max_length="20" min_length="2">
                </div>

                <div class="mab-3">
                    <lable for="clave" class="form-label">Clave</lable>
                    <input type="text" class="form-control" name="clave" id="clave" value="<?= $materia->clave?>" required pattern="[A-Z a-z 0-9]" max_length="10" min_length="3">
                </div>

                <div class="mab-3">
                    <lable for="noUnidades" class="form-label">No.Unidades</lable>
                    <input type="text" class="form-control" name="noUnidades" id="noUnidades" value="<?= $materia->noUnidades?>" required pattern="[0-9]{1,5}">
                </div>

                <div class="mab-3">
                    <input type="submit" class="btn btn-success">
                </div>
            </form>

            <div class="col-2"></div>

        </div>
    </div>
</div>