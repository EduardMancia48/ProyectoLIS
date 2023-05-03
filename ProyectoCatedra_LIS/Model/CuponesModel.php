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

//Función para confirmar la informacion de la compra de cupones
public function comprarCupon($datos=array()){
  $query="INSERT INTO ventas (cod_cupon, Cod_Dui, estado, cantidad) VALUES (:cod_cupon, :Cod_Dui, 'Comprado', :cantidad)";
  return $this->setQuery($query,$datos);
}

//Funcion para ver los cupones adquiridos
public function ver_MisCupones($cod_dui=''){
  $query="SELECT p.cod_cupon,p.titulo_oferta,p.descripcion,p.fecha_limite,v.estado,c.Cod_Dui
          FROM promociones p 
          INNER JOIN ventas v ON p.cod_cupon=v.cod_cupon 
          INNER JOIN clientes c on c.Cod_Dui=v.Cod_Dui 
          WHERE c.Cod_Dui=:Cod_Dui ORDER BY p.cod_cupon;";
  return $this->getQuery($query,['Cod_Dui'=>$cod_dui]);
}
}
?>