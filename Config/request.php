<?php namespace Config;
class Request{
	private $controlador;
	private $metodo;
	private $argumento;
	public function __construct(){
		if(isset($_GET['url'])){
			$ruta= filter_input(INPUT_GET, 'url')
		}
	}
}

?>