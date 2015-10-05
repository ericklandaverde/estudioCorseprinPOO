<?php namespace Models;

class Identificacion{
	private $id_rfc;
	private $puesto;
	private $nombre;
	private $direccion;
	private $fecha;
	private $edad;
	private $estadocivil;
	private $telefono; 
	private $email;
	private $nivelacademico;
	private $images; 

	public function __construct(){
		$this->con = new Conexion();
	}
	public function set($atributo, $contenido){
		$this->atributo = $contenido;
	}
    public function get($atributo){
    	return $this->atributo;
    }
    
	public function listar(){
	 	$sql = "SELECT t1.*, t2.id_rfc as id_Documentos FROM identificacion t1 INNER JOIN Documentos t2 ON t1.id_rfc = t2.id_rfc";
	 	$datos = $this->con->consultaRetorno($sql);
	 	return $datos; 
	 }
	public function add(){
	 	$sql = "INSERT INTO identificacion(id_rcf, puesto, nombre, direccion, fecha, edad, estadocivil, telefono, email, nivelacademico, images)
	 	VALUES ('{$this->id_rfc}','{$this->puesto}','{$this->nombre}','{$this->direccion}','{$this->fecha}','{$this->edad}',
	 		'{$this->estadocivil}','{$this->telefono}','{$this->nivelacademico}','{$this->images}')";
        $this->con->consultaSimple($sql);
	}
	public function delate(){
	 	$sql = "DELETE FROM identificacion WHERE id_rfc = '{$this->id_rfc}'";
	 	$this->con->consultaSimple($sql);
	 }
    public function edit(){
    	$sql = "UPDATE FROM identificacion SET id_rfc='{$this->id_rfc}', puesto='{$this->puesto}',
    	nombre='{$this->nombre}',direccion='{$this->direccion}',fecha='{$this->fecha}',edad='{$this->edad}',
	    estadocivil='{$this->estadocivil}',telefono='{$this->telefono}',nivelacademico='{$this->nivelacademico}',
	    images='{$this->images}'";
	    $this->con->consultaSimple($sql);
    }
    public function view(){
	 	$sql = "SELECT * FROM indentificacion";
	 	$datos = $this->con->consultaRetorno($sql);
	 	$row = mysqli_fetch_assoc($datos);
	 	return $row; 
	 }
}

?>