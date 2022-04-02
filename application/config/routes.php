<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// rutas partes
$route['default_controller'] = 'welcome';
$route['quienes_somos'] = 'welcome/quienes_somos';
$route['contacto'] = 'welcome/contacto';
$route['contacto2'] = 'usuario_controller/contacto2';
$route['terminos'] = 'welcome/terminos';
$route['comercializacion'] = 'welcome/comercializacion';
$route['registro'] = 'Welcome/registro';
$route['login'] = 'Welcome/login';

$route['verifico_nuevoregistro']='registro_controller';
$route['verifico_usuario']='login_controller';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['logout'] ='panel_controller/logout';

//rutas de productos
$route ['verifico_nuevoproducto']=  'producto_controller/agrega_producto';
$route['muestraeliminados'] = 'producto_controller/muestra_eliminados';

$route['productos_todos'] = 'producto_controller';
$route['productos_agrega'] = 'producto_controller/form_agrega_producto';
$route['productos_modifica/(:num)'] = 'producto_controller/muestra_modificar/$1';
$route['productos_elimina/(:num)'] = 'producto_controller/eliminar_producto/$1';
$route['productos_activa/(:num)'] = 'producto_controller/activar_producto/$1';

$route['productos_mascotas'] = 'producto_controller/muestra_mascotas';
$route['productos_accesorios'] = 'producto_controller/muestra_accesorios';

$route['verifico_modificaproducto/(:num)'] = 'producto_controller/modificar_producto/$1';

$route['listar_ventas'] = 'producto_controller/listar_ventas';


//rutas usuario 
$route ['verifico_nuevoregistroADMIN']=  'usuario_controller/agregar_usuario';
$route['verifico_modificausuario/(:num)'] = 'usuario_controller/modificar_usuario/$1';
$route['usuarios_todos'] = 'usuario_controller';
$route['agregar_usuario'] = 'usuario_controller/form_agrega_usuario';
$route['usuarios_eliminados'] = 'usuario_controller/usuarios_eliminados';
$route['usuario_elimina/(:num)'] = 'usuario_controller/eliminar_usuario/$1';
$route['usuario_modifica/(:num)'] = 'usuario_controller/muestra_modificar/$1';
$route['usuario_activa/(:num)'] = 'usuario_controller/activar_usuario/$1';
$route['perfil'] = 'usuario_controller/perfil';

// rutas carrito
$route['carrito_agrega'] = 'carrito_controller/add';
$route['carrito_elimina/(:any)'] = 'carrito_controller/remove/$1';
$route['Remeras'] ='carrito_controller/Remeras';
$route['gorras'] ='carrito_controller/gorras';
$route['carrito_elimina/(:any)'] = 'carrito_controller/remove/$1';
$route['comprar'] = 'carrito_controller/muestra_compra';

$route['carrito_actualiza'] = 'carrito_controller/carrito_actualiza';


$route['mascotas'] ='carrito_controller/mascotas';
$route['accesorios'] ='carrito_controller/accesorios';


// consultas
$route['verifico_consulta'] = 'usuario_controller/cargo_consulta';
$route['muestra_consultas'] = 'usuario_controller/muestra_consulta';
$route['eliminar_consulta/(:num)'] = 'usuario_controller/eliminar_consulta/$1';
$route['consultas'] = 'usuario_controller/consultas';
