<?php
require_once('Model.php');

class CuponesModel extends ModelwPDO{

  //Función para listar la informacion de los cupones
  public function listCupones(){
    $query="SELECT * FROM promociones";
    return $this->getQuery($query);
}  
}

?>