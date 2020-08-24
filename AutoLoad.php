<?php
	function AutoLoad($carga)
	{
		
		if(is_file('Controller/'.$carga.'.Controller.php'))
		{
			require_once('Controller/'.$carga.'.Controller.php');
		}
		else if(is_file('Model/'.$carga.'.Class.php'))
		{
			require_once('Model/'.$carga.'.Class.php');
		}
		else if(is_file('Librerias/'.$carga.'.Lib.php'))
		{
			require_once('Librerias/'.$carga.'.Lib.php');
		}
		else if(is_file('Framework/Smarty/'.$carga.'.class.php'))
        {
            require_once('Framework/Smarty/'.$carga.'.class.php'); 
        }
		else 
		{
			
		}
	}

	spl_autoload_register('AutoLoad');
?>