<?php
	Class Usuarios
	{
		public function BuscarUsuario($u, $pass)
		{
			$user=new Conexion();
			$q="SELECT * FROM `usuarios` WHERE `Usuario`='$u' AND `Contraseña`='$pass';";
			$resultado=$user->query($q);
			return $resultado;
		}

		public function AgregarUsuario($nom, $ape, $genero, $u, $pass)
		{
			//INSERT INTO `usuario`(`Nombre`, `Apellido`, `Password`, `Tipo`) VALUES ()

			$usuario = new Conexion();
			$query="INSERT INTO `usuarios`(`Nombre`, `Apellido`, `Género`, `Fecha de Nac`, `Usuario`, `Contraseña`) VALUES ('$nombre','$apellido', '$genero', '$u', '$pass');";
			$consulta=$usuario->query($query);
			$usuario->close();
			return $consulta;
		}
	}
?>
