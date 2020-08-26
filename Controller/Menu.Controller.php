<?php
	class Menu
	{
		public function CargarOpcion()
		{
			$smarty=new Smarty();
			session_start();
			$_SESSION['opcion']=$_GET['opcion'];

			$smarty->assign('e','null');
			$smarty->assign('vista',$_SESSION['opcion']);
			$smarty->assign('usuario',$_SESSION['user']);
			$smarty->display('Master.tpl');
		}
	}


?>