<?php

abstract class Controller{
    
    public function render($vista,$vistaBag=array()){
        $file="View/".static::class."/$vista";
        $file=str_replace("Controller","",$file);
        if(is_file($file)){
            extract($vistaBag);
            ob_start();
            require($file);
            $contenido=ob_get_contents();
            ob_end_clean();
            echo $contenido;
        }
        else{
            echo "No existe la vista";
        }
    }
}
?>