<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Alumnos</h2>
            <table class="table">
                <thead>
                    <th>Nombre</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Sexo</th>
                    <th>ID Grupo</th>
                    <th>ID Grado</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                    <?php foreach ($alumnos as $alumno): ?>
                        <tr>
                            <td><?=$alumno->nombre?></td>
                            <td><?=$alumno->fechaNacimiento?></td>
                            <td><?=$alumno->sexo?></td>
                            <td><?=$alumno->idGrupo?></td>
                            <td><?=$alumno->idGrado?></td>
                            <td>
                                <a href="<?= base_url('/alumno/delete/'.$alumno->id);?>">Eliminar</a>
                                <a href="<?= base_url('/alumno/editar/'.$alumno->id);?>">Editar</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>