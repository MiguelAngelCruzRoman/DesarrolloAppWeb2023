
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">ESTUDIANTEC</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Alumnos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= base_url('index.php/alumno/agregar');?>">Agregar</a></li>
            <li><a class="dropdown-item" href="<?= base_url('index.php/alumno/mostrar') ?>">Mostrar</a></li>
            <li><a class="dropdown-item" href="<?= base_url('index.php/alumno/buscar') ?>">Buscar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Materias
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= base_url('index.php/materia/agregar');?>">Agregar</a></li>
            <li><a class="dropdown-item" href="<?= base_url('index.php/materia/mostrar') ?>">Mostrar</a></li>
            <li><a class="dropdown-item" href="<?= base_url('index.php/materia/buscar') ?>">Buscar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Carreras
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= base_url('index.php/carrera/agregar');?>">Agregar</a></li>
            <li><a class="dropdown-item" href="<?= base_url('index.php/carrera/mostrar') ?>">Mostrar</a></li>
            <li><a class="dropdown-item" href="<?= base_url('index.php/carrera/buscar') ?>">Buscar</a></li>
          </ul>
        </li>
        <li><a class="dropdown-item" href="<?=base_url('index.php/'); session_destroy();?>">Cerrar Sesión</a></li>
      </ul>
      

    </div>
  </div>
</nav>