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

//Funcion para ver los cupones adquiridos
public function ver_Cupones($cod_dui=''){
  $query="SELECT p.cod_cupon,p.titulo_oferta,p.descripcion,p.fecha_limite,v.estado,c.Cod_Dui
          FROM promociones p 
          INNER JOIN ventas v ON p.cod_cupon=v.cod_cupon 
          INNER JOIN clientes c on c.Cod_Dui=v.Cod_Dui 
          WHERE c.Cod_Dui=:Cod_Dui ORDER BY p.cod_cupon;";
  return $this->getQuery($query,['Cod_Dui'=>$cod_dui]);
}
}
?>