<div class="container">
    <div class="row">
        <div class="col-4">
            <?php foreach($alumnos as $alumno):?>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?= $alumno->nombre?></h5>
                        <p class="card-text"><?= $alumno->fechaNacimiento?></p>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</div>