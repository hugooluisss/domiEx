<?php
global $objModulo;
switch($objModulo->getId()){
	case 'listarunners':
		$db = TBase::conectaDB();
		global $sesion;

		$sql = "select * from runners where a.visible = true";

		$rs = $db->query($sql) or errorMySQL($db, $sql);
		$datos = array();
		while($row = $rs->fetch_assoc()){
			$row['json'] = json_encode($row);

			array_push($datos, $row);
		}
		$smarty->assign("lista", $datos);
	break;
	case 'crunners':
		$documentos = "repositorio/transportistas/documentos/";
		switch($objModulo->getAction()){
			case 'add':
				$db = TBase::conectaDB();
				$obj = new TRunner();
				$band = true;
				$rs = $db->query("select idRunner from runner where correo = '".$_POST['correo']."'");

				if ($rs->num_rows > 0){ #si es que encontró la clave
					$row = $rs->fetch_assoc();
					if ($row["idRunner"] <> $_POST['id']){
						$obj->setId($row['idRunner']);
						$smarty->assign("json", array("band" => false, "mensaje" => "El correo ya se encuentra registrado con otro Runner "));
						$band = false;
					}
				}

				if ($band){
					$obj = new TRunner();

					$obj->setId($_POST['id']);
					$obj->setNombre($_POST['nombre']);
					$obj->setSexo($_POST['sexo']);
					$obj->setCorreo($_POST['correo']);
					$obj->setPass($_POST['pass']);
					$obj->setEntidad($_POST['entidad']);
					$obj->setTelefono($_POST['telefono']);

					$band = $obj->guardar();

					$smarty->assign("json", array("band" => $band));
				}
			break;
			case 'del':
				$obj = new TRunner($_POST['id']);
				$smarty->assign("json", array("band" => $obj->eliminar()));
			break;
			case 'validarEmail':
				$db = TBase::conectaDB();
				if ($_POST['id'] == '')
					$rs = $db->query("select idRunner from runner where upper(correo) = upper('".$_POST['txtCorreo']."')");
				else
					$rs = $db->query("select idRunner from runner where upper(correo) = upper('".$_POST['txtCorreo']."') and not idRunner = ".$_POST['id']);

				echo $rs->num_rows == 0?"true":"false";
			break;
		}
	break;
}
?>
