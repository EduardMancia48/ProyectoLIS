<?php
require_once('Model.php');

class EmpleadosModel extends ModelwPDO{

  
  //Función para listar la informacion de los cupones
  public function listarEmpleados($id=''){
    if($id==''){
      $query="SELECT * FROM empleados";
      return $this->getQuery($query);
    }
    else{
      $query="SELECT * FROM empleados WHERE cod_empleado=:cod_empleado";
            return $this->getQuery($query,['cod_empleado'=>$id]);
    }   
}



public function crearEmpleado($empleado=array()){
  $pass_hash = hash('sha256', $empleado['contrasena']); // convierte la contraseña en un hash SHA-256
  $empleado['contrasena'] = $pass_hash; // reemplaza la contraseña original por el hash SHA-256
  $query="INSERT INTO empleados (cod_empleado, nombres, apellidos, correo, contraseña, cod_rol) VALUES (:cod_empleado, :nombres, :apellidos, :correo, :contraseña, '2')";
  return $this->setQuery($query,$empleado);
}


public function eliminarEmpleado($id=''){
  $query="DELETE FROM empleados WHERE cod_empleado=:cod_empleado";
  return $this->getQuery($query,['cod_empleado'=>$id]);

}

public function editarEmpleado($empleado=array()){
  $query="UPDATE empleados SET nombres=:nombres, apellidos=:apellidos, correo=:correo, contraseña=:contraseña, cod_rol=:cod_rol WHERE cod_empleado=:cod_empleado";
  return $this->setQuery($query,$empleado);
}


}
?>

