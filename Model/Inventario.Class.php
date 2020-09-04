<?php
	Class Inventario
	{
		// Modelo de libros
		public function AgregarLibro($nombre, $materia, $grado, $autor, $editorial, $precio, $cantidad)
		{

			$usuario=new Conexion();
			$query="INSERT INTO `libros`(`Nombre`,`Materia`,`Grado`, `Autor`,`Editorial`,`Precio`, `Cantidad`) VALUES ('$nombre', '$materia', '$grado', '$autor', '$editorial', '$precio', '$cantidad');";
			$consulta=$usuario->query($query);
			$usuario->close();
			return $consulta;
		}

		public function VerLibros ()
		{
			$usuario=new Conexion();
			$query="SELECT * FROM `libros` WHERE 1";
			$consulta=$usuario->query($query);
			$usuario->close();
			return $consulta;
		}

	    public function RetirarLibro($nombre, $materia, $grado, $autor, $editorial, $precio, $cantidad)
	    {
	      $usuario=new Conexion();
	      $query="DELETE FROM `libros` WHERE 'Nombre'='$nombre' AND 'Materia'='$materia' AND 'Grado'='$grado' AND 'Autor'='$autor' AND 'Editorial'='$editorial' AND 'Precio'='$precio' AND 'Cantidad'='$cantidad');";

	      $consulta=$usuario->query($query);
	      $usuario->close();
	      return $consulta;
	    }

	    // Modelo de Uniformes
	    public function VerUniformes ()
	    {
	      $con=new Conexion();
	      $query="SELECT * FROM `uniformes` WHERE 1;";
	      $consulta=$con->query($query);
	      $con->close();
	      return $consulta;
	    }

	    public function BuscarUniforme($prenda, $talla, $precio, $cantidad)
	    {
		$usuario=new Conexion();
		$query="SELECT * FROM `uniformes` WHERE `Prenda`='$prenda' AND `Talla`='$talla' AND `Precio`='$precio' AND `Cantidad`='$cantidad');";
		$consulta=$usuario->query($query);
		$usuario->close();
		return $consulta;

	    }

	    public function AgregarUniforme($prenda, $talla, $precio, $cantidad)
	    {

		$usuario = new Conexion();
		$query="INSERT INTO `uniformes`(`Prenda`, `Talla`, `Precio`, `Cantidad`) VALUES ('$prenda','$talla', '$precio', '$cantidad');";
		$consulta=$usuario->query($query);
		$usuario->close();
		return $consulta;

	    }

	    public function RetirarUniforme($prenda, $talla, $precio, $cantidad)
	    {
		$usuario=new Conexion();
		$query="DELETE FROM `uniformes` WHERE `Prenda`='$prenda' AND `Talla`='$talla' AND `Precio`='$precio' AND `Cantidad` = '$cantidad';";

		$consulta=$usuario->query($query);
		$usuario->close();
		return $consulta;
	    }
	}

?>
