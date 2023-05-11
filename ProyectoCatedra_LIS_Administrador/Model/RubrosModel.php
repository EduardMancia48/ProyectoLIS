<?php
require_once 'Model.php';

class RubrosModel extends ModelwPDO{

  //Funcion para obtener informacion de Rubro
  public function get($id=''){
    if($id==''){
      $query="SELECT * FROM rubros";
      return $this->getQuery($query); 
    }
    else{
      $query="SELECT * FROM rubros WHERE cod_rubro=:cod_rubro";
      return $this->getQuery($query,['cod_rubro'=>$id]);
    }   
}

  //Función para ingresar un nuevo rubro
  public function insertarRubro($rubro=array()){
        
    $query="INSERT INTO rubros VALUES (:cod_rubro,:nombre)";

    return $this->setQuery($query,$rubro);

  }

  public function removerRubro($id){
    $query="DELETE FROM rubros WHERE cod_rubro=:cod_rubro";
    return $this->setQuery($query,['cod_rubro'=>$id]);
}

public function updateRubro($rubro=array()){
  $query="UPDATE rubros SET nombre=:nombre WHERE cod_rubro=:cod_rubro";
  return $this->setQuery($query,$rubro);

}
 
}
?>