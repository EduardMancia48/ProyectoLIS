<?php
require_once 'Model.php';

class EmpresasModel extends ModelwPDO{

  public function get($id){
      $query="SELECT * FROM empresas_ofertantes WHERE cod_empresa=:cod_empresa";
      return $this->getQuery($query,['cod_empresa'=>$id]);
}

//Funcion para ver los clientes registrados
public function ver_Clientes(){
  $query="SELECT c.nombres, c.apellidos, c.telefono, c.direccion, v.cod_cupon, v.estado
          FROM clientes c
          INNER JOIN ventas v ON c.Cod_Dui=v.Cod_Dui 
          ORDER BY c.nombres;";
  return $this->getQuery($query);
}

//Funcion para ver las empresas registradas
public function ver_Empresas(){
  $query="SELECT e.cod_empresa, e.nombre_empresa, e.direccion, e.nombre_contacto, e.telefono, e.correo, e.porc_comision,r.nombre as rubro
          FROM empresas_ofertantes e
          INNER JOIN rubros r ON e.cod_rubro=r.cod_rubro 
          ORDER BY e.cod_empresa;";
  return $this->getQuery($query);
}

//Funcion para ver las empresas registradas
public function ver_Ofertas(){
  $query="SELECT p.cod_cupon, p.titulo_oferta, p.precio_oferta, v.cantidad as cupones_vendidos, p.cant_cupones_disponibles,(p.precio_oferta * v.cantidad) as ingresos_totales, TRUNCATE(p.precio_oferta * v.cantidad * e.porc_comision,2) as cargo_servicio
  FROM promociones p
  INNER JOIN ventas v ON p.cod_cupon=v.cod_cupon
  INNER JOIN empresas_ofertantes e ON p.cod_empresa=e.cod_empresa
  ORDER BY p.cod_cupon;";
  return $this->getQuery($query);
}

//Funcion para registrar empresa
public function registrarEmpresa($empresa=array()){
        
  $query="INSERT INTO empresas_ofertantes VALUES (:cod_empresa, :nombre_empresa, :direccion, :nombre_contacto, :telefono, :correo, :porc_comision, :cod_rubro)";

  return $this->setQuery($query,$empresa);

}

public function removerEmpresa($id){
  $query="DELETE FROM empresas_ofertantes WHERE cod_empresa=:cod_empresa";
  return $this->setQuery($query,['cod_empresa'=>$id]);
}

public function updateEmpresa($empresa=array()){
  $query="UPDATE empresas_ofertantes SET nombre_empresa=:nombre_empresa, direccion=:direccion, nombre_contacto=:nombre_contacto, telefono=:telefono, correo=:correo, porc_comision=:porc_comision, cod_rubro=:cod_rubro WHERE cod_empresa=:cod_empresa";
  return $this->setQuery($query,$empresa);

}

}
?>