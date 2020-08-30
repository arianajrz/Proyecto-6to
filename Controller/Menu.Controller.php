<?php
	class Menu
	{
		public function CargarOpcion()
		{
			$smarty=new Smarty();
			session_start();
			$_SESSION['opcion']=$_GET['opcion'];
			if($_SESSION['opcion']=='VerUsuarios')
			{
				$inv=new Usuarios();
				$lib=new Librerias(); 
				$invent=$inv->VerUsuarios();
				$dato=$lib->DatosSmarty($invent);
				$smarty->assign('dato',$dato);
			}
			else if($_SESSION['opcion']=='VerLibros')
			{
				$inv=new Inventario();
				$lib=new Librerias(); 
				$invent=$inv->VerLibros();
				$dato=$lib->DatosSmarty($invent);
				$smarty->assign('dato',$dato);
			}
			else if($_SESSION['opcion']=='VerUniformes')
			{
				$inv=new Inventario();
				$lib=new Librerias(); 
				$invent=$inv->VerUnifomes();
				$dato=$lib->DatosSmarty($invent);
				$smarty->assign('dato',$dato);
			}
			else if($_SESSION['opcion']=='BuscarLibros')
			{
				$inv=new Inventario();
				$lib=new Librerias(); 
				$invent=$inv->VerUnifomes();
				$dato=$lib->DatosSmarty($invent);
				$smarty->assign('dato',$dato);
			}
			else if($_SESSION['opcion']=='BuscarUniformes')
			{
				$inv=new Inventario();
				$lib=new Librerias(); 
				$invent=$inv->VerUnifomes();
				$dato=$lib->DatosSmarty($invent);
				$smarty->assign('dato',$dato);
			}
			$smarty->assign('e','null');
            		$smarty->assign('vista',$_SESSION['opcion']);
            		$smarty->assign('usuario',$_SESSION['user']);
            		$smarty->display('Master.tpl');
		}
	}


?>
