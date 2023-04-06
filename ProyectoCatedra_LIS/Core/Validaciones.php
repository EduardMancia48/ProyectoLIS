<?php

function estaVacio($var){
    return empty(trim($var));
   }
   
   function esTexto($var){
       return preg_match('/^[a-zA-Z ]+$/',$var);
   }
   
   function esMail($var){
       return filter_var($var,FILTER_VALIDATE_EMAIL);
   }

   function esTelefono($var){
    return preg_match('/^[267][0-9]{3}-?[0-9]{4}$/',$var);

    function esDUI($var){
        return preg_match('/^[0-9]{8}-?[0-9]$/',$var);
    }
}
?>