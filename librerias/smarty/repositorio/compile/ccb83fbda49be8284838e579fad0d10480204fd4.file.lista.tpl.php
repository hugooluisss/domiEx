<?php /* Smarty version Smarty-3.1.11, created on 2018-08-15 09:59:40
         compiled from "templates/plantillas/modulos/ordenes/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1020563755b743fdcb66b73-77956396%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ccb83fbda49be8284838e579fad0d10480204fd4' => 
    array (
      0 => 'templates/plantillas/modulos/ordenes/lista.tpl',
      1 => 1534301217,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1020563755b743fdcb66b73-77956396',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5b743fdccb1ba9_07394455',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b743fdccb1ba9_07394455')) {function content_5b743fdccb1ba9_07394455($_smarty_tpl) {?><div class="box">
	<div class="box-body">
		<table id="tblDatos" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Folio</th>
					<th>Estado</th>
					<th>Origen</th>
					<th>Interesados</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
					<tr>
						<td style="border-left: 2px solid <?php echo $_smarty_tpl->tpl_vars['row']->value['color'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['folio'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nombre'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['row']->value['origen_json']->direccion;?>
</td>
						<td class="text-center">
							<button type="button" class="btn btn-warning btn-xs" action="interesados" title="Transportistas interesados" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
' data-toggle="modal" data-target="#winInteresados"><?php echo $_smarty_tpl->tpl_vars['row']->value['interesados'];?>
</button>
						</td>
						<td class="text-right" style="width: 120px;">
							<?php if ($_smarty_tpl->tpl_vars['row']->value['idEstado']==5){?>
								<button type="button" class="btn btn-danger btn-xs" action="reporte" title="Reporte" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
' data-toggle="modal" data-target="#winReporte"><i class="fa fa-file-alt"></i></button>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['row']->value['idEstado']>3){?>
								<button type="button" class="btn btn-primary btn-xs" action="seguimiento" title="Seguimiento" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
' data-toggle="modal" data-target="#winSeguimiento"><i class="fa fa-book"></i></button>
							<?php }?>
							<button type="button" class="btn btn-success btn-xs" action="modificar" title="Modificar" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'"><i class="fas fa-edit"></i></button>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div><?php }} ?>