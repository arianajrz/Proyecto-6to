<?php
     class Conexion extends mysqli
     {
	   public function __construct()
       {
            function __construct()
		{
			$server="localhost";
			$pass="";
			$user="root";
			$base="basededatos";

			parent::__construct($server,$user,$pass,$base);
			$this->query("SET NAMES 'utf8';");
			$this->connect_errno ? die('Error en la conexion') : $error='<br/>Conectado<br/>';

			echo $error;
			unset ($error);

       }
     }
?>
