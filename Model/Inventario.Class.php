<?php
	Class Inventario
	{
		// Modelo de libros
		public function AgregarLibro ($nombre, $materia, $grado, $autor, $editorial, $precio, $cantidad)
		{

			$libros=new Conexion();
			$query="INSERT INTO `libros`(`Nombre`,`Materia`,`Grado`, `Autor`,`Editorial`,`Precio`, `Cantidad`) VALUES ('$nombre, $materia, $grado, $autor, $editorial, $precio, $cantidad');";

			$consulta=$libros->query($query);
			$libros->close();
			return $consulta;
		}

		public function VerLibros ()
		{
			$con=new Conexion();
			$query="SELECT * FROM `libros` WHERE 1";
			$consulta=$con->query($query);
			$con->close();
			return $consulta;
		}

	    public function RetirarLibro($nombre, $materia, $grado, $autor, $editorial, $precio, $cantidad)
	    {
	      $libros=new Conexion();
	      $query="DELETE FROM `libros` WHERE 'Nombre'='$nombre' AND 'Materia'='$materia' AND 'Grado'='$grado' AND 'Autor'='$autor' AND 'Editorial'='$editorial' AND 'Precio'='$precio' AND 'Cantidad'='$cantidad';";

	      $consulta=$libros->query($query);
	      $libros->close();
	      return $consulta;
	    }

	    // Modelo de Uniformes
	    public function VerUniformes ()
	    {
	      $con=new Conexion();
	      $query="SELECT * FROM `uniformes` WHERE 1";
	      $consulta=$con->query($query);
	      $con->close();
	      return $consulta;
	    }

	    public function BuscarUniforme($prenda, $talla, $precio, $cantidad)
	    {
		$uniforme=new Conexion();
		$q="SELECT * FROM `uniformes` WHERE `Prenda`='$prenda' AND `Talla`='$talla' AND 'Precio'='$precio' AND 'Cantidad'='$cantidad';";
		$resultado=$uniforme->query($q);
		return $resultado;
	    }

	      public function AgregarUniforme($prenda, $talla, $precio, $cantidad)
	      {

		$uniforme = new Conexion();
		$query="INSERT INTO `uniformes`(`Prenda`, `Talla`, `Precio`, `Cantidad`) VALUES ('$prenda','$talla', '$precio', '$cantidad');";
		$consulta=$uniforme->query($query);
		$uniforme->close();
		return $consulta;
	      }

	      public function RetirarUniforme($prenda, $talla, $precio, $cantidad)
	      {
		$uniforme=new Conexion();
		$query="DELETE FROM `uniformes` WHERE `Prenda`='$prenda' AND `Talla`='$talla' AND 'Precio'='$precio' AND 'Cantidad'='$cantidad';";

		$consulta=$uniforme->query($query);
		$uniforme->close();
		return $consulta;
	      }
	}

?>