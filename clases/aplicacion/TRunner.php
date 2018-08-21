<?php
/**
* TTransportista
* Transportistas que pueden realizar el trabajo
* @package aplicacion
* @autor Hugo Santiago hugooluisss@gmail.com
**/

class TRunner{
	private $idRunner;
	private $nombre;
	private $sexo;
	private $correo;
	private $pass;
	private $entidad;
	private $situacion;
	private $visible;

	/**
	* Constructor de la clase
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	*/
	public function __construct($id = ''){
		$this->situacion = 0;
		$this->setId($id);
		return true;
	}

	/**
	* Carga los datos del objeto
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	* @return boolean True si se realizó sin problemas
	*/

	public function setId($id = ''){
		if ($id == '') return false;

		$db = TBase::conectaDB();
		$rs = $db->query("select * from runner where idRunner = ".$id);

		foreach($rs->fetch_assoc() as $field => $val){
			switch($field){
				default:
					$this->$field = $val;
			}
		}

		return true;
	}

	/**
	* Retorna el identificador del objeto
	*
	* @autor Hugo
	* @access public
	* @return integer identificador
	*/

	public function getId(){
		return $this->idRunner;
	}

	/**
	* Establece el nombre
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/

	public function setNombre($val = ''){
		$this->nombre = $val;
		return true;
	}

	/**
	* Retorna el nombre
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/

	public function getNombre(){
		return $this->nombre;
	}

	/**
	* Establece sexo
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/

	public function setSexo($val = ''){
		$this->sexo = $val;
		return true;
	}

	/**
	* Retorna el RUT
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/

	public function getSexo(){
		return $this->sexo;
	}

	/**
	* Establece el pass
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/

	public function setPass($val = ''){
		$this->pass = $val;
		return true;
	}

	/**
	* Retorna el Pass
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/

	public function getPass(){
		return $this->pass;
	}

	/**
	* Establece el correo
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/

	public function setCorreo($val = ""){
		$this->correo = $val;
		return true;
	}

	/**
	* Retorna el correo
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/

	public function getCorreo(){
		return $this->correo;
	}

	/**
	* Establece la entidad federativa
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/

	public function setEntidad($val = ""){
		$this->entidad = $val;
		return true;
	}

	/**
	* Retorna la entidad federativa
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/

	public function getEntidad(){
		return $this->entidad;
	}

	/**
	* Establece el teléfono
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/

	public function setTelefono($val = ""){
		$this->telefono = $val;
		return true;
	}

	/**
	* Retorna el teléfono
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/

	public function getTelefono(){
		return $this->telefono;
	}

	/**
	* Establece la situacion
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/

	public function setSituacion($val = 0){
		$this->situacion = $val;
		return true;
	}

	/**
	* Retorna la situacion
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/

	public function getSituacion(){
		return $this->situacion;
	}

	/**
	* Guarda los datos en la base de datos, si no existe un identificador entonces crea el objeto
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/

	public function guardar(){
		$db = TBase::conectaDB();

		if ($this->getId() == ''){
			$sql = "INSERT INTO runner(nombre, situacion, visible) VALUES('".$this->getNombre()."', ".$this->getSituacion().", 1);";
			$rs = $db->query($sql) or errorMySQL($db, $sql);

			if (!$rs) return false;

			$this->idRunner = $db->insert_id;
		}

		if ($this->getId() == '')
			return false;

		$sql = "UPDATE runner
			SET
				nombre = '".$this->getNombre()."',
				sexo = '".$this->getSexo()."',
				correo = '".$this->getCorreo()."',
				pass = '".$this->getPass()."',
				entidad = '".$this->getEntidad()."',
				situacion = '".$this->getSituacion()."',
				telefono = '".$this->getTelefono()."'
			WHERE idRunner = ".$this->getId();

		$rs = $db->query($sql) or errorMySQL($db, $sql);

		if ($rs)
			$this->setId($this->getId());

		return $rs?true:false;
	}

	/**
	* Elimina el objeto de la base de datos
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/

	public function eliminar(){
		if ($this->getId() == '') return false;

		$db = TBase::conectaDB();
		$sql = "update runner set visible = false, aprobado = false where idRunner = ".$this->getId();

		$rs = $db->query($sql) or errorMySQL($db, $sql);

		return $rs?true:false;
	}

	/**
	* Retorna si el transportista está habilitado
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/

	public function isVisible(){
		return $this->visible == 1;
	}
}
?>
