<?php /* Smarty version Smarty-3.1.11, created on 2018-08-21 13:35:23
         compiled from "templates/plantillas/modulos/frontend/registroRunners.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16726457965b7c54b25cb964-09568406%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aba325cb975b40e44a48a940d5f6497756e24cba' => 
    array (
      0 => 'templates/plantillas/modulos/frontend/registroRunners.tpl',
      1 => 1534876486,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16726457965b7c54b25cb964-09568406',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5b7c54b26476b6_09927317',
  'variables' => 
  array (
    'PAGE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b7c54b26476b6_09927317')) {function content_5b7c54b26476b6_09927317($_smarty_tpl) {?><div class="container">
	<div class="row">
		<div class="col-12 col-sm-6 offset-sm-3">
			<img src="<?php echo $_smarty_tpl->tpl_vars['PAGE']->value['iconos'];?>
logo.png" class="img-fluid" />
			<div class="card card-default">
				<div class="card-body">
					<form id="frmRegistro" class="registroFrontEnd">
						<div class="row">
							<div class="col-xs-12">
								<h3>¿Quieres ser un Runner?</h3>
							</div>
						</div>
						<br />
						<div class="row">
							<div class="col-md-12">
								<input id="txtNombre" name="txtNombre" class="form-control" placeholder="Tu nombre" />
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<input type="email" id="txtCorreo" name="txtCorreo" class="form-control" placeholder="Correo electrónico" />
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<input type="tel" id="txtTelefono" name="txtTelefono" class="form-control" placeholder="Teléfono" />
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<input type="password" id="txtPass" name="txtPass" class="form-control" placeholder="Contraseña" />
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<input type="password" id="txtPass2" name="txtPass2" class="form-control" placeholder="Confirma" />
							</div>
						</div>
						<br />
						<div class="row">
							<div class="col-md-12 text-center">
								<button type="submit" class="btn btn-primary">Registrar</button>
								<br /><br />
								<a href="login">¿Ya tienes una cuenta? inicia sesión</a>
							</div>
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