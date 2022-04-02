<style>
body {
  background-image: url('img/fondo6.jpg');

  

  color: #fff;
}
</style>
<div class="contenedor">

                <div class="panel-heading">
                    <br><br>
                    <h2 class="text-center p-3">Perfil de usuario</h2>
                </div>

                            <figure class="text-center">
                                <img alt="Imagen usuario" src="<?php echo base_url('assets/img/user.png'); ?>" width="150" height="150">
                            </figure>
                            <h4 class="text-center">
                                Tipo: 
                                <?php
                                if ($perfil_id == '2') {
                                    echo 'Cliente';
                                } else {
                                    echo 'Administrador';
                                } ?>
                            </h4>
        
                            <p class="text-center p-3 ">
                                <u><b>Apellido:</b></u> <?= $apellido ?><span class="caret"></span><br><br>
                                <u><b>Nombre:</b></u> <?= $nombre ?><span class="caret"></span><br><br>
                                <u><b>Nombre usuario:</b></u> <?= $username ?><span class="caret"></span><br><br>
                                <u><b>Correo electrónico:</b></u> <?= $email ?><span class="caret"></span>
                            </p>

                 

 
                </div>
