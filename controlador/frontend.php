<?php
global $objModulo;
switch($objModulo->getId()){
	case 'inicio':
	break;
	case 'administracion':
		$db = TBase::conectaDB();
		$sql = "select * from orden where idOrden = ".$_GET['id'];
		$rs = $db->query($sql);
		$row = $rs->fetch_assoc();

		$row['origen_json'] = json_decode($row['origen']);
		$row['destino_json'] = json_decode($row['destino']);
		$row['salida'] = "";

		$smarty->assign("datosOrden", json_encode($row));
	break;
}
?>
