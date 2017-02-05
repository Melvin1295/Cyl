<?php

 class Conexion extends mysqli{

 	public function __construct(){

 		parent::__construct('localhost','root','','bd_cyl');
 		$this->query("SET NAMES 'utf8';");
 		$this->connect_errno ? die ('Error en la conexion') : $x = 'Conectado';
 		unset($x);

 	}

 	public function recorrer($y){
 		return mysqli_fetch_array($y);
 	}

 	public function recgrupo($y){
 		return mysqli_fetch_assoc($y);
 	}

 	public function rows($y){
 		return mysqli_num_rows($y);
 	}
 }


?>