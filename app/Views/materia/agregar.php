<div class="container">
    <div class="row">

        <div class="col-2"></div>

        <div class="col-8">
            <form action="<?= base_url('index.php/materia/insert');?>" method="POST">
            <?= csrf_field()?>
                <h2>Agregar materia</h2>

                <div class="mab-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre">
                </div>

                <div class="mab-3">
                    <lable for="nombreCorto" class="form-label">Nombre corto</lable>
                    <input type="text" class="form-control" name="nombreCorto" id="nombreCorto">
                </div>

                <div class="mab-3">
                    <lable for="clave" class="form-label">Clave</lable>
                    <input type="text" class="form-control" name="clave" id="clave">
                </div>

                <div class="mab-3">
                    <lable for="noUnidades" class="form-label">No.Unidades</lable>
                    <input type="text" class="form-control" name="noUnidades" id="noUnidades">
                </div>

                <div class="mab-3">
                    <input type="submit" class="btn btn-success">
                </div>
            </form>

            <div class="col-2"></div>

        </div>
    </div>
</div>