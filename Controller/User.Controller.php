<?php
	class User
    {
	   public function ValidarUsuario()
       {
            $smarty=new Smarty();
			$user=new Usuarios();
			$lib=new Librerias();
        
            
            $nombre=$_POST['usuario'];
			$pass=$_POST['pass'];

			$dato=$user->BuscarUsuario($nombre, $pass);
			$d=$lib->DatosRow($dato);
			//var_dump($dato);

			if($dato->num_rows==1)
			{
				session_start();
				$_SESSION['user']=$nombre;
				$_SESSION['vista']="null";
				
				$smarty->assign('e','null');
				$smarty->assign('vista',$_SESSION['vista']);
				$smarty->assign('usuario',$_SESSION['user']);
				$smarty->display('Master.tpl');

			}
			else 
			{
				$smarty->display('Master.tpl');
			}
		}

		public function GuardarUsuario()
	   {
			$guardar = new Usuarios();
			$smarty=new Smarty();
			session_start();

			$nombre=$_POST['Nombre'];
			$apellido=$_POST['Apellido'];
			$genero=$_POST['Genero'];
			$fechanac=$_POST['Fechanac'];
			$usuario=$_POST['Usuario'];
			$pass=$_POST['Password'];

			$transaccion=$guardar->AgregarUsuario($nombre,$apellido,$genero,$fechanac,$usuario,$pass);

			if($transaccion)
			{
				$men= "usuario ".$nombre." creado";
			}
			else 
			{
				$men= "usuario ".$nombre." no guardado";
			}
			
			$smarty->assign('men',$men);
			$smarty->assign('e','null');
			$smarty->assign('vista','CrearUsuario');
			$smarty->assign('usuario',$_SESSION['user']);
			$smarty->display('Master.tpl');
       }
    }
?>