<?php
	
	class Home
	{
		public function Inicio()
		{
			$smarty=new Smarty();

			$smarty->display('master.tpl');
		}

		/*public function User()
		{
			$user=new Usuarios();
			$user->BuscarUsuario();

			//$class2=new Librerias();
			//$class2->Libreria1();

			//$smarty=new Smarty();
		}*/
	}
?>
