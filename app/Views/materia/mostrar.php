<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Materias</h2>
            <table class="table">
                <thead>
                    <th>Nombre</th>
                    <th>Nombre Corto</th>
                    <th>Clave</th>
                    <th>No. Unidades</th>
                </thead>
                <tbody>
                    <?php foreach ($materias as $materia): ?>
                        <tr>
                            <td><?=$materia->nombre?></td>
                            <td><?=$materia->nombreCorto?></td>
                            <td><?=$materia->clave?></td>
                            <td><?=$materia->noUnidades?></td>
                            <td>
                                <a href="<?= base_url('/materia/delete/'.$materia->idMateria);?>">Eliminar</a>
                                <a href="<?= base_url('/materia/editar/'.$materia->idMateria);?>">Editar</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>