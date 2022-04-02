<header>
<!--MENU PARA ADMINISTADORES -->
<?php if( ($this->session->userdata('logged_in')) and ($perfil_id == '1') ) { ?> 
<div class="contenedor">
<nav class="navbar navbar-expand-lg navbar-dark">
  <a class="navbar-brand" href="<?php echo base_url('');?>"> Animalandia</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Productos<span class="caret"></span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url('productos_todos');?>">Listar todos los Productos</a>
          <a class="dropdown-item" href="<?php echo base_url('muestraeliminados');?>">Listar Productos eliminados</a>
          <a class="dropdown-item" href="<?php echo base_url('productos_mascotas');?>">Listar Mascotas</a>
          <a class="dropdown-item" href="<?php echo base_url('productos_accesorios');?>">Listar Accesorios</a>
          <a class="dropdown-item" href="<?php echo base_url('listar_ventas');?>">Listar Ventas</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Usuarios<span class="caret"></span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url('usuarios_todos');?>">Listar Usuarios</a>
          <a class="dropdown-item" href="<?php echo base_url('usuarios_eliminados');?>">Listar Usuarios eliminados</a>
          <a class="dropdown-item" href="<?php echo base_url('consultas');?>">Listar Consultas</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Bienvenido <?= $nombre ?><span class="caret"></span></a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url('perfil');?>">Mi Perfil</a>
          <a class="dropdown-item" href="<?php echo base_url('logout');?>">Salir</a>

        </div>
      </li>
    </ul>
  </div>
</nav> 
</div> 

<!--MENU PARA CLIENTES -->			
<?php } else if( ($this->session->userdata('logged_in')) and ($perfil_id == '2') ) { ?> 
<div class="contenedor">
<nav class="navbar navbar-expand-lg navbar-dark">
  <a class="navbar-brand" href="<?php echo base_url('');?>">Animalandia</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('quienes_somos');?>">Quienes Somos <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('comercializacion');?>">Comercialización</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('terminos');?>">Términos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('contacto2');?>">Contactanos</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catalogo</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?php echo base_url('mascotas');?>">Mascotas</a>
            <a class="dropdown-item" href="<?php echo base_url('accesorios');?>">Accesorios</a>

        </div>
      </li>   
     <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Bienvenido <?= $nombre ?><span class="caret"></span>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo base_url('perfil');?>">Mi Perfil</a>
              <a class="dropdown-item" href="<?php echo base_url('logout');?>">Salir</a>
          </div>
      </li>
    </ul>
  </div>
</nav> 
</div>

<!--MENU PARA PUBLICO -->
<?php } 

else { ?> 
<div class="contenedor">
<nav class="navbar navbar-expand-lg navbar-dark">
  <a class="navbar-brand" href="<?php echo base_url('');?>">Animalandia</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('quienes_somos');?>">Quienes Somos <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('comercializacion');?>">Comercialización</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('terminos');?>">Términos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('contacto2');?>">Contacto</a>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catalogo</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?php echo base_url('mascotas');?>">Mascotas</a>
            <a class="dropdown-item" href="<?php echo base_url('accesorios');?>">Accesorios</a>

        </div>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('registro');?>">Registrarse</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('login');?>">Iniciar Sesión</a>
      </li>
    </ul>
  </div>
</nav> 
</div> 
 

<?php } ?> 
</header>