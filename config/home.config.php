<?php
global $conf;

$conf['home'] = array(
	'vista' => 'home/panel.tpl',
	'titulo' => "Panelprincipal",
	'seguridad' => true,
	'js' => array('usuario.class.js'),
	'jsTemplate' => array('home.js'),
	'capa' => LAYOUT_BACKEND);
	
$conf['administracion'] = array(
	'vista' => 'frontend/seguimiento.tpl',
	'controlador' => "frontend.php",
	'titulo' => "Panel de seguimiento para el cliente",
	'seguridad' => false,
	'js' => array('transportista.class.js', 'orden.class.js'),
	'jsTemplate' => array('seguimiento.js'),
	'capa' => LAYOUT_BACKENDCLIENTE);
	
$conf['listaPostulantes'] = array(
	'controlador' => 'interesados.php',
	'vista' => 'frontend/listaPostulantes.tpl',
	'descripcion' => 'Lista de interesados',
	'seguridad' => false,
	'capa' => LAYOUT_AJAX);
	
$conf['registrotransportistas'] = array(
	'vista' => 'frontend/home.tpl',
	'controlador' => 'frontend.php',
	'titulo' => 'Bienvenido',
	'descripcion' => 'Registro de transportistas',
	'seguridad' => false,
	'js' => array('orden.class.js', 'usuario.class.js', 'transportista.class.js'),
	'jsTemplate' => array('home.js', 'login.js'),
	'capa' => LAYOUT_FRONTEND);
?>