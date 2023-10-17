<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Carreras</h2>
            <table class="table">
                <thead>
                    <th>Nombre</th>
                    <th>Acrónimo</th>
                </thead>
                <tbody>
                    <?php foreach ($carreras as $carrera): ?>
                        <tr>
                            <td><?=$carrera->nombre?></td>
                            <td><?=$carrera->acronimo?></td>
                            <td>
                                <a href="<?= base_url('/carrera/delete/'.$carrera->id);?>">Eliminar</a>
                                <a href="<?= base_url('/carrera/editar/'.$carrera->id);?>">Editar</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>