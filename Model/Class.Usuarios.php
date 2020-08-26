<?php
	Class Usuarios
	{
		public function BuscarUsuario($user, $pass)
		{
			$usuario = new Conexion();
			$query="SELECT * FROM `usuarios` WHERE `Nombre`='$user'AND `Password`='$pass';";

			$consulta=$usuario->query($query);
			$usuario->close();
			return $consulta;
		}
	}
?>
