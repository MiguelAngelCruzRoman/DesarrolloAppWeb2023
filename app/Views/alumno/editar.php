<div class="container">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <form action="<?= base_url('index.php/alumno/update');?>" method="POST">
            <?= csrf_field()?>
                <h2>Editar alumno</h2>

                <input type="hidden" name="id" value="<?=$alumno->id?>">

                <div class="mab-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" value="<?=$alumno->nombre?>" required pattern="[A-Z]" max_length="30" min_length="3">
                </div>

                <div class="mb-3">
                    <lable for="fechaNacimiento" class="form-label">Fecha de nacimiento</lable>
                    <input type="date" class="form-control" name="fechaNacimiento" id="fechaNacimiento" value="<?= $alumno->fechaNacimiento?>" required>
                </div>

                <div class="mb-3">
                    <label for="sexo">Sexo</label>
                    <select name="sexo" id="sexo" class="form-control" required>
                        <?php if($alumno->sexo == "HOMBRE"):?>
                        <option value="Hombre" selected>Hombre</option>
                        <option value="Mujer" >Mujer</option>
                        <?php else:?>
                        <option value="Hombre" >Hombre</option>
                        <option value="Mujer" selected>Mujer</option>
                        <?php endif;?>
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