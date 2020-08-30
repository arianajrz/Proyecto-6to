<?php
	/**
	 *
	 */
	class CrearUsuario
	{

		function __construct()
		{
			# code...
		}


	public function GuardarUsuarios ($nombre, $apellido, $genero, $fechanac, $u, $pass)
	{

		$usuario=new Conexion();
		$query="INSERT INTO usuarios(Nombre,Apellido,Genero,Fecha de Nac,Usuario,Password) VALUES ('$nombre, $apellido, $genero, $fechanac, $u, $pass')";

		$consulta=$usuario->query($query);
		$usuario->close();
		return $consulta;
	}
}
?>
