<div class="container">
    <div class="row">

        <div class="col-2"></div>

        <div class="col-8">
            <form action="<?= base_url('index.php/carrera/update');?>" method="POST">
            <?= csrf_field()?>
                <h2>Editar Carrera</h2>

                <input type="hidden" name="id" value="<?=$carrera->id?>">

                <div class="mab-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" value="<?= $carrera->nombre?>">
                </div>

                <div class="mab-3">
                    <lable for="acronimo" class="form-label">Acrónimo</lable>
                    <input type="text" class="form-control" name="acronimo" id="acronimo" value="<?= $carrera->acronimo?>">
                </div>

                <div class="mab-3">
                    <input type="submit" class="btn btn-success">
                </div>
            </form>

            <div class="col-2"></div>

        </div>
    </div>
</div>