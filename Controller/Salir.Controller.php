<?php
    class Salir 
    {
        
         public function CerrarSesion()
        {
            $smarty=new Smarty();
            $smarty->display('Master.tpl');
        }
    }

?>