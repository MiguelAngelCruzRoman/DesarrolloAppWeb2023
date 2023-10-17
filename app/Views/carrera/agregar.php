<div class="container">
    <div class="row">

    <?php
    if(isset($validation)){
        print $validation->listErrors();
    }?>
        <div class="col-2"></div>

        <div class="col-8">
            <form action="<?= base_url('index.php/carrera/agregar');?>" method="POST">
            <?= csrf_field()?>
                <h2>Agregar Carrera</h2>

                <div class="mab-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre">
                </div>

                <div class="mab-3">
                    <lable for="acronimo" class="form-label">Acrónimo</lable>
                    <input type="text" class="form-control" name="acronimo" id="acronimo">
                </div>


                <div class="mab-3">
                    <input type="submit" class="btn btn-success">
                </div>
            </form>

            <div class="col-2"></div>

        </div>
    </div>
</div>