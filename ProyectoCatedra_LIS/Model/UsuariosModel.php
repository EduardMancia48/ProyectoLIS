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
        $pass_hash = hash('sha256', $pass); // convierte la contraseña en un hash SHA-256
        $query="SELECT nombres, apellidos FROM clientes WHERE correo=:email AND contraseña=:contrasena";
        return $this->getQuery($query,['email'=>$email, 'contrasena'=>$pass_hash]);
    }
}
?>