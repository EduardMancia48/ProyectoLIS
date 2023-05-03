<?php
require_once('Model.php');

class UsuariosModel extends ModelwPDO{


    //Metodo para validar a un usuario
    public function validarUser($email,$pass){
        $pass_hash = hash('sha256', $pass); // convierte la contraseña en un hash SHA-256
        $query="SELECT Cod_Dui, nombres, apellidos FROM clientes WHERE correo=:email AND contraseña=:contrasena";
        return $this->getQuery($query,['email'=>$email, 'contrasena'=>$pass_hash]);
    }



    public function registrarUser($user=array()){
        $pass_hash = hash('sha256', $user['contrasena']); // convierte la contraseña en un hash SHA-256
        $user['contrasena'] = $pass_hash; // reemplaza la contraseña original por el hash SHA-256
        $query="INSERT INTO clientes (Cod_Dui, nombres, apellidos, telefono, correo, direccion, contraseña) 
                VALUES (:cod_Dui, :nombre, :apellido, :telefono, :correo, :direccion, :contrasena)";
        return $this->setQuery($query,$user);
    }

    
}
?>