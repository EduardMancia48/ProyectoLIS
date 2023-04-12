<?php
require_once 'Model.php';

class CuponesModel extends ModelwPDO{

  //Función para listar la informacion de los cupones
  public function getCupones($id=''){
    if($id==''){
      $query="SELECT * FROM promociones";
      return $this->getQuery($query);
    }
    else{
      $query="SELECT * FROM promociones WHERE cod_cupon=:cod_cupon";
            return $this->getQuery($query,['cod_cupon'=>$id]);
    } 
}
}
?>