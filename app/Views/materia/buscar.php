<div class="container">
    <div class="row">
        <div class="col-12">

        <h1>Buscar Materias</h1>

        <form action="<?= base_url('index.php/materia/buscar/'); ?>" method="GET">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" required pattern="[A-Z]" max_length="50" min_length="3">
            <label for="nombreCorto">Nombre Corto</label>
            <input type="text" class="form-control" name="nombreCorto" required pattern="[A-Z]" max_length="20" min_length="2">
            <label for="clave">Clave</label>
            <input type="text" class="form-control" name="clave" required pattern="[A-Z a-z 0-9]" max_length="10" min_length="3">
            <label for="noUnidades">No.Unidades</label>
            <input type="text" class="form-control" name="noUnidades" required pattern="[0-9]{1,5}">
        
            <input type="submit" class="btn btn-success mt-4" value="Buscar">
        </form>

        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <table class="table">
            
                <thead>
                    <th>Nombre</th>
                    <th>Nombre Corto</th>
                    <th>Clave</th>
                    <th>No. Unidades</th>
                </thead>

                <tbody>
                    <?php foreach($materias as $materia):?>
                        <tr>
                            <td><?=$materia->nombre?></td>
                            <td><?=$materia->nombreCorto?></td>
                            <td><?=$materia->clave?></td>
                            <td><?=$materia->noUnidades?></td>
                        </tr>
                    <?php endforeach;?>
                </tbody>

            </table>
        </div>
    </div>
</div>

