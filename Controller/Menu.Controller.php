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
                 $inv=new Can();
                 $lib=new Librerias(); 
                 $invent=$inv->VerUsuarios();
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