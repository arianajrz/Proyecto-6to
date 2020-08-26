<?php
     class Conexion extends mysqli
     {
	   public function __construct()
       {

            $server="localhost";
            $pass="perito";
            $user="root";
            $base="BasedeDatos";

            //parent::__construct('mysql.hostinger.com',$user,'geo4160150087',$base);
            parent::__construct($server,$user,$pass,$base);
            $this->query("SET NAMES 'utf8';");
            $this->connect_errno ? die('Error en la conexion de la base de datos.') : $error="<br><br> Conectado con la base de datos: ".$base;
            //echo $error;
			unset($error);
       }
     }
?>
