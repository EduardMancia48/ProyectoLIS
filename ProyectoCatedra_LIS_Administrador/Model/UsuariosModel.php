<?php
require_once('Model.php');

class UsuariosModel extends ModelwPDO{


    //Metodo para validar a un usuario
    public function validarUser($email,$pass){
        $pass_hash = hash('sha256', $pass); // convierte la contraseña en un hash SHA-256
        $query="SELECT cod_empleado, nombres, apellidos,cod_rol FROM empleados WHERE correo=:email AND contraseña=:contrasena";
        return $this->getQuery($query,['email'=>$email, 'contrasena'=>$pass_hash]);
    }



    public function registrarEmployee($user=array()){
        $pass_hash = hash('sha256', $user['contrasena']); // convierte la contraseña en un hash SHA-256
        $user['contrasena'] = $pass_hash; // reemplaza la contraseña original por el hash SHA-256
        $query="INSERT INTO empleados (cod_empleado, nombres, apellidos, correo, contraseña, cod_rol) 
                VALUES (:cod_empleado, :nombre, :apellido, :correo, :contrasena, '1')";
        return $this->setQuery($query,$user);
    }

    
}
?>