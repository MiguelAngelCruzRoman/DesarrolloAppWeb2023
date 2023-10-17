<div class="container">
    <div class="row">
        <div class="col-12">

        <h1>Buscar Carrera</h1>

        <form action="<?= base_url('index.php/carrera/buscar/'); ?>" method="GET">
             <label for="nombre" class="form-label">Nombre</label>
             <input type="text" class="form-control" name="nombre" id="nombre">
 
             <lable for="acronimo" class="form-label">Acrónimo</lable>
             <input type="text" class="form-control" name="acronimo" id="acronimo">

             <input type="submit" class="btn btn-success mt-4" value="Buscar">
        </form>

        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <table class="table">
            
                <thead>
                    <th>Nombre</th>
                    <th>Acrónimo</th>
                </thead>

                <tbody>
                    <?php foreach($carreras as $carrera):?>
                        <tr>
                            <td><?=$carrera->nombre?></td>
                            <td><?=$carrera->acronimo?></td>
                        </tr>
                    <?php endforeach;?>
                </tbody>

            </table>
        </div>
    </div>
</div>

