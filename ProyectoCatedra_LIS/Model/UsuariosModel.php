<?php
require_once('Model.php');

class UsuariosModel extends ModelwPDO{

    //Metodo para registrar usuario e ingresarlo a la base de datos
    public function registrarUser($user=array()){
        $query="INSERT INTO clientes VALUES (:cod_Dui,:nombre,:apellido,:telefono,:correo,:direccion,:contrasena)";
        return $this->setQuery($query,$user);
    }

    //Metodo para validar a un usuario
    public function validarUser($email,$pass){
        $query="SELECT nombres, apellidos FROM clientes
        WHERE correo=:email AND password=SHA2(:pass,256)";
        return $this->getQuery($query,['email'=>$email, 'pass'=>$pass]);
    }
}
?>