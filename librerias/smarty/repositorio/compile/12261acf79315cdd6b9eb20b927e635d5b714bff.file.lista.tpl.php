<?php /* Smarty version Smarty-3.1.11, created on 2018-08-15 09:56:38
         compiled from "templates/plantillas/modulos/transportistas/lista.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9198009095b743f26c6a183-22656234%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12261acf79315cdd6b9eb20b927e635d5b714bff' => 
    array (
      0 => 'templates/plantillas/modulos/transportistas/lista.tpl',
      1 => 1531506654,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9198009095b743f26c6a183-22656234',
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
  'unifunc' => 'content_5b743f26d80fa3_60022264',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b743f26d80fa3_60022264')) {function content_5b743f26d80fa3_60022264($_smarty_tpl) {?><table id="tblDatos" class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>Razón social</th>
			<th>Correo</th>
			<th>Telefono</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
		<?php  $_smarty_tpl->tpl_vars["row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["row"]->key => $_smarty_tpl->tpl_vars["row"]->value){
$_smarty_tpl->tpl_vars["row"]->_loop = true;
?>
			<tr title="<?php echo $_smarty_tpl->tpl_vars['row']->value['estado'];?>
">
				<td style="border-left: 3px solid <?php if ($_smarty_tpl->tpl_vars['row']->value['aprobado']==1){?>green<?php }else{ ?>red<?php }?>"><?php echo $_smarty_tpl->tpl_vars['row']->value['razonsocial'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['correo'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['telefono'];?>
</td>
				<td style="text-align: right">
					<button type="button" class="btn btn-primary btn-xs" action="modificar" title="Modificar" datos='<?php echo $_smarty_tpl->tpl_vars['row']->value['json'];?>
'><i class="fa fa-edit"></i></button>
					
					<button type="button" class="btn btn-success btn-xs" title="documentos" identificador="<?php echo $_smarty_tpl->tpl_vars['row']->value['idTransportista'];?>
" data-toggle="modal" data-target="#winDocumentos"><i class="fa fa-file"></i></button>
					
					<button type="button" class="btn btn-danger btn-xs" action="eliminar" title="Eliminar" identificador="<?php echo $_smarty_tpl->tpl_vars['row']->value['idTransportista'];?>
"><i class="fa fa-times"></i></button>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table><?php }} ?>