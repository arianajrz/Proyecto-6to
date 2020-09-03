<?php
	class Invent
	{
		public function GuardarLibro()
		{
			$guardar=new Inventario();
			$smarty=new Smarty();
			session_start();
			
			$nombre=$_POST['nombre'];
			$materia=$_POST['materia'];
			$grado=$_POST['grado'];
      		$autor=$_POST['autor'];
			$editorial=$_POST['editorial'];
			$precio=$_POST['precio'];
      		$cantidad=$_POST['cantidad'];

			$transaccion=$guardar->AgregarLibro($nombre,$materia,$grado,$autor,$editorial,$precio,$cantidad);
			if ($transaccion)
			{
				$men= "El libro ".$nombre." se ha guardado";
			}
			else
			{
				$men= "El libro ".$nombre." no se ha logrado guardar";
			}
			$smarty->assign('men',$men);
			$smarty->assign('e','null');
			$smarty->assign('vista',$_SESSION['vista']);
			$smarty->assign('usuario',$_SESSION['user']);
			$smarty->display('Master.tpl'); 
		}
		
	   	public function QuitarLibros()
	    	{
            		$ql=new Inventario();
			$smarty=new Smarty();
			session_start();
			
			$nombre=$_POST['nombre'];
			$materia=$_POST['materia'];
			$grado=$_POST['grado'];
      			$autor=$_POST['autor'];
			$editorial=$_POST['editorial'];
			$precio=$_POST['precio'];
      			$cant=$_POST['cant'];

			$resultado=$ql->RetirarLibro($nombre,$materia,$grado,$autor,$editorial,$precio,$cant);
			if ($resultado)
			{
				$men= "El libro ".$nombre." se ha Retirado";
			}
			else
			{
				$men= "El libro ".$nombre." no se ha logrado retirar";
			}
			$smarty->assign('men',$men);
			$smarty->assign('e','null');
			$smarty->assign('vista',$_SESSION['vista']);
			$smarty->assign('usuario',$_SESSION['u']);
			$smarty->display('Master.tpl'); 
		}
		public function GuardarUniformes()
		{
			$guardar = new Inventario();
			$smarty=new Smarty();
			session_start();
			
			$prenda=$_POST['prenda'];
			$talla=$_POST['talla'];
			$precio=$_POST['precio'];
			$cantidad=$_POST['cantidad'];

			//var_dump($_POST);

			$transaccion=$guardar->AgregarUniforme($prenda,$talla,$precio,$cantidad);

			if($transaccion)
			{
				$men= "producto ".$nombre." agregado";
			}
			else 
			{
				$men= "producto ".$nombre." no agregado";
			}
			
			$smarty->assign('men',$men);
			$smarty->assign('e','null');
			$smarty->assign('vista','vista');
			$smarty->assign('usuario',$_SESSION['user']);
			$smarty->display('Master.tpl');
		}
		
	   	public function QuitarUniformes()
	    	{
			/*$smarty->assign('men',$men);
			$smarty->assign('e','null');
			$smarty->assign('vista',$_SESSION['vista']);
			$smarty->assign('usuario',$_SESSION['u']);
			$smarty->display('Master.tpl');*/ 
		}
	}
?>
