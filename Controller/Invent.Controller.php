<?php
	class Invent
	{
		public function GuardarLibro()
		{
			$gl=new Inventario();
			$smarty=new Smarty();
			session_start();
			
			$nombre=$_POST['nombre'];
			$materia=$_POST['materia'];
			$grado=$_POST['grado'];
      			$autor=$_POST['autor'];
			$editorial=$_POST['editorial'];
			$precio=$_POST['precio'];
      			$cant=$_POST['cant'];

			$resultado=$gl->AgregarLibro($nombre,$materia,$grado,$autor,$editorial,$precio,$cant);
			if ($resultado)
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
			$smarty->assign('usuario',$_SESSION['u']);
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
	}
?>
