<?php
global $conf;

$conf['runners'] = array(
	'controlador' => 'runners.php',
	'vista' => 'runners/panel.tpl',
	'descripcion' => 'Administración de runners',
	'seguridad' => true,
	'js' => array('transportista.class.js'),
	'jsTemplate' => array('runners.js'),
	'capa' => LAYOUT_BACKEND);

$conf['listarunners'] = array(
	'controlador' => 'runners.php',
	'vista' => 'runners/lista.tpl',
	'descripcion' => 'Lista de runners',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);

$conf['crunners'] = array(
	'controlador' => 'runners.php',
	'descripcion' => 'Controlador de runners',
	'seguridad' => false,
	'capa' => LAYOUT_JSON);
?>
