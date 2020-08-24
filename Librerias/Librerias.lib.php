<?php
	class Librerias
	{
		public function DatosSmarty($consulta)
		{
		  
         
			$ar=array();

			while ($row=mysqli_fetch_assoc($consulta))
			{
			    
				array_push($ar,$row);
			}
            
			return $ar;
		}

		public function DatosRow($consulta)
		{
			$assoc_arr = mysqli_fetch_assoc($consulta);
			return $assoc_arr;
		}
	}
?>