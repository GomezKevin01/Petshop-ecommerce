<style>
body {
  background-image: url('img/fondo2.jpg');
  color: #fff;
}
</style>
<div class="contenedor" id="carrito">
    <div class="cart">
        <div class = "well">
            <br><br><br>
            <h2 align="center">Productos en tu Carrito</h2>
        </div>
        
        <div align="center"> 
            <br>
            <?php  $cart_check = $this->cart->contents();
            // Si el carrito está vacio, mostrar el siguiente mensaje
            if (empty($cart_check)) 
            {
                echo 'Para agregar productos al carrito, click en "Añadir al carrito"';
            }  
            ?>    
        </div>

        <div  class="table-responsive">
        <table class="table" style="color:#fff">


            <?php // Todos los items de carrito en "$cart". 
            if ($cart = $this->cart->contents()): //Esta función devuelve un array de los elementos agregados en el carro
  
            ?>
                <tr>
                    <td>ID</td>
                    <td>Descripción</td>
                    <td>Precio</td>
                    <td>Cantidad</td>
                    <td>Total</td>
                    <td>Borrar</td>
                </tr>   

            <?php // Crea un formulario y manda los valores a carrito_controller/actualiza carrito
            echo form_open('carrito_actualiza');
                $gran_total = 0;
                $i = 1;


                foreach ($cart as $item):
                    echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                    echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
                    echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
                    echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
                    echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);
            ?>

                    <tr>
                        <td>
                            <?php echo $i++; ?>
                        </td>
                        <td>
                            <?php echo $item['name']; ?>
                        </td>
                        <td>
                            $ <?php echo number_format($item['price'], 2); ?>
                        </td>
                        <td>
                            <?php echo form_input('cart[' . $item['id'] . '][qty]', $item['qty'], 
                                                    'maxlength="3" size="1" style="text-align: right" required pattern="[0-9]*"'); ?>
                        </td>
                            <?php $gran_total = $gran_total + $item['subtotal']; ?>
                        <td>
                            $ <?php echo number_format($item['subtotal'], 2) ?>
                        </td>
                        <td> 
                            <?php // Imagen
                                $path = '<img src= '. base_url('img/cart_cross.png') . ' width="25px" height="20px">';
                                echo anchor('carrito_elimina/' . $item['rowid'], $path); 
                            ?>
                        </td>
                    </tr>

                    <?php foreach($productos->result() as $row){ ?>
                        <?php 
                             if($row->id == $item['id']){
                                if($row->stock < $item['qty']){?>                                   
                                    <span class="badge badge-danger">Error777: la cantidad ingresada en alguno de los productos supera al stock</span>
                                    <div id="dom-target"    style="display: none;">
                                    <?php
                                    $output="1";
                                    echo htmlspecialchars($output);
                                    ?>
                                </div>
                                <?php
                               }
                             }
                             ?>
                    <?php } ?>




                <?php 
                endforeach; 
                ?>                   
                <tr>
                    <td>
                        <b>Total: $
                            <?php //Gran Total
                            echo number_format($gran_total, 2); 
                            ?>
                        </b>
                    </td> 
                    <td colspan="5" align="right">
                        <!-- Borrar carrito usa mensaje de confirmacion javascript implementado en partes/head_view -->
                        <input type="button" class ='btn btn-primary ' value="Borrar Carrito" onclick="borra_carrito()">
                        <input type="submit" class ='btn btn-primary ' value="Actualizar">
                        <input id ="submit" type="button" class ='btn btn-primary ' value="Confirmar Orden" onclick="window.location = 'comprar'">

                    </td>
                </tr>
                <?php echo form_close();
            endif; ?>
        </table>
</div>

</div>

</div>
<br>

<script>
        function borra_carrito($rowid) {
        var result = confirm('¿Desea vaciar el carrito?');
            if (result) {
                window.location = "<?php echo base_url(); ?>carrito_controller/remove/all";
            } else {
                return false;
            }
    }
</script>

<!--<script>
        function confirmar_orden($rowid) {
        var result = confirm('¿Desea confirmar la orden?');
            if (result) {
                window.location = "<?php echo base_url(); ?>comprar";
            } else {
                return false;
            }
    }
</script>-->
<script>
    var div= document.getElementById("dom-target");
    var myData = div.textContent;
    if (myData == 1) {
        document.getElementById("submit").disabled = true;
    }

 </script>   

