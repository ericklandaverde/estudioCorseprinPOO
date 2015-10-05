<?php namespace Models;
 
 class Conexion{
 	private $datos = array(
 		"host" => "localhost",
 		"root" => "root",
 		"pass" => "",
 		"db" => "u802532598_capit");
 	
 	private $con;

 	public function __construct(){
 		$this->con = new \mysqli($this->datos['host'],
 			$this->datos['root'], $this->datos['pass'],
 			$this->datos['db']);
 		if ($this->con) {
 			echo "Conexion a la base de datos exitosa";
 		}else{
 			echo "No hay conexion";
 		}
 	}

 	public function consultaSimple($sql){
 		$this->con->query($sql);
 	}

 	public function consultaRetorno($sql){
 		$datos= $this->con->query($sql);
 		return $datos;
 	}

 	public function __destruct() { 
 		$this->con->close();
 	}
 }
 ?>