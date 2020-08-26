<?php
	Class Usuarios
	{
		public function BuscarUsuario($user, $pass)
		{
			$usuario = new Conexion();
			$query="SELECT * FROM `usuarios` WHERE `Usuario`='$u'AND `Password`='$pass';";

			$consulta=$usuario->query($query);
			$usuario->close();
			return $consulta;
		}

		public function AgregarUsuario($nom, $ape, $genero, $u, $pass)
		{
			//INSERT INTO `usuario`(`Nombre`, `Apellido`, `Password`, `Tipo`) VALUES ()

			$usuario = new Conexion();
			$query="INSERT INTO `usuarios`(`Nombre`, `Apellido`, `Género`, `Fecha de Nac`, `Usuario`, `Contraseña`) VALUES ('$nom','$ape', '$genero', '$u', '$pass');";
			$consulta=$usuario->query($query);
			$usuario->close();
			return $consulta;
		}
	}
?>
