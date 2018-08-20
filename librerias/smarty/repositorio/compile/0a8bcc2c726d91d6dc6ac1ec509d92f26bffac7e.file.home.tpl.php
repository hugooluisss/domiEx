<?php /* Smarty version Smarty-3.1.11, created on 2018-08-20 10:18:34
         compiled from "templates/plantillas/modulos/frontend/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6742298745b739e310b5e27-29850947%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a8bcc2c726d91d6dc6ac1ec509d92f26bffac7e' => 
    array (
      0 => 'templates/plantillas/modulos/frontend/home.tpl',
      1 => 1534777803,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6742298745b739e310b5e27-29850947',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5b739e3110b069_01279216',
  'variables' => 
  array (
    'PAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b739e3110b069_01279216')) {function content_5b739e3110b069_01279216($_smarty_tpl) {?><div class="container">
	<div class="row">
		<div class="col-12 col-sm-7">
			<div class="card card-transparente">
				<div class="card-body">
					<h2>LOGISTICA INTELIGENTE</h2>
					Agil - seguro - confiable - sustentable
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-5">
			<div class="card card-default">
				<div class="card-body">
					<form id="frmRegistroTransportista">
						<div class="row">
							<div class="col-xs-12">
								<h3>Forma parte de nuestro equipo de trabajo</h3>
							</div>
						</div>
						<br />
						<div class="row">
							<div class="col-md-12">
								<input id="txtRazonSocial" name="txtRazonSocial" class="form-control" placeholder="Razón social" />
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<input id="txtRepresentante" name="txtRepresentante" class="form-control" placeholder="Representante" />
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<input id="txtTelefono" name="txtTelefono" class="form-control" placeholder="Teléfono" />
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<input type="email" id="txtCorreo" name="txtCorreo" class="form-control" placeholder="Correo electrónico" />
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-12">
								<input type="password" id="txtPass2" name="txtPass2" class="form-control" placeholder="Contraseña" />
							</div>
						</div>
						<div class="text-center">
							<button type="submit" class="btn btn-link">Registrarte</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/frontend/winRegistroCarga.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/frontend/winMapa.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['PAGE']->value['rutaModulos']).("modulos/frontend/winSigueTuCarga.tpl"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>