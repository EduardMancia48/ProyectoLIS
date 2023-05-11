<?php
require_once 'Controller.php';
require_once 'Model/EmpresasModel.php';
require_once 'Model/RubrosModel.php';
require_once 'Core/Validaciones.php';

class EmpresasController extends Controller{
    private $model;

    function __construct(){
        
        $this->model=new EmpresasModel();

    }

    public function index(){
        $vistaBag=array();
        $this->render("index.php",$vistaBag);
    }

    public function menuEmpresas(){
        $vistaBag=array();
        $this->render("empresas.php",$vistaBag);
    }

    public function misClientes(){
        $vistaBag=array();
        $clientes=$this->model->ver_Clientes();
        $vistaBag['clientes']=$clientes;
        $this->render("listaclientes.php",$vistaBag);
    }

    public function listaEmpresas(){
        $vistaBag=array();
        $empresas=$this->model->ver_Empresas();
        $vistaBag['empresas']=$empresas;
        $this->render("listaempresas.php",$vistaBag);
    }

    public function listaOfertas(){
        $vistaBag=array();
        $ofertas=$this->model->ver_Ofertas();
        $vistaBag['ofertas']=$ofertas;
        $this->render("listaofertas.php",$vistaBag);
    }

    public function verRegistroEmpresa(){
        $vistaBag=array();
        $rubros= new RubrosModel();
        $vistaBag['rubros']=$rubros->get();
        $this->render("registraempresa.php",$vistaBag);
    }

    public function remover($id){
        $this->model->removerEmpresa($id);
        $_SESSION['success_message']="rubro eliminado exitosamente";
        header('location:/ProyectoCatedra_LIS_Administrador/Empresas/listaEmpresas');
    }

    public function edit($id){
        $viewBag=array();
        $empresa=$this->model->get($id);
        $rubros= new RubrosModel();
        $viewBag['rubros']=$rubros->get();
        $viewBag['empresa']=$empresa[0];
        $this->render("editarempresa.php",$viewBag);
    }

    public function agregarEmpresa(){
        if(isset($_POST['guardar'])){
            extract($_POST);
            $errores=array();
            $empresa=array();
            $viewBag=array();
            $empresa['cod_empresa']=$cod_empresa;
            $empresa['nombre_empresa']=$nombre_empresa;
            $empresa['direccion']=$direccion;
            $empresa['nombre_contacto']=$nombre_contacto;
            $empresa['telefono']=$telefono;
            $empresa['correo']=$correo;
            $empresa['porc_comision']=$porc_comision;
            $empresa['cod_rubro']=$cod_rubro;

            if(!esCodEmpresa($cod_empresa)||!isset($cod_empresa)){
                array_push($errores,'Debes ingresar un codigo de empresa válido (ABC###)');
            }
            
            if(estaVacio($nombre_empresa)||!isset($nombre_empresa)){
                array_push($errores,'Debes ingresar el nombre de la empresa');
            }

            if(estaVacio($direccion)||!isset($direccion)){
                array_push($errores,'Debes ingresar la dirección de la empresa');
            }

            if(estaVacio($nombre_contacto)||!isset($nombre_contacto)){
                array_push($errores,'Debes ingresar un nombre de contacto de la empresa');
            }

            if(!esTelefono($telefono)||!isset($telefono)){
                array_push($errores,'Debes ingresar un número de telefono válido');
            }

            if(!esMail($correo)||!isset($correo)){
                array_push($errores,'Debes ingresar una dirección de correo válida');
            }

            if(estaVacio($porc_comision)||!isset($porc_comision)){
                array_push($errores,'Debes ingresar el porcentaje de comision de la empresa');
            }

            if(estaVacio($cod_rubro)||!isset($cod_rubro)){
                array_push($errores,'Debes ingresar el codigo del rubro');
            }
            
            if(count($errores)==0){
            $this->model->registrarEmpresa($empresa);
            $_SESSION['success_message']="empresa registrada exitosamente";
              header('location:/ProyectoCatedra_LIS_Administrador/Empresas/menuEmpresas');

            }
            else{
                $viewBag['errores']=$errores;
                $viewBag['empresa']=$empresa;
                $rubrosmodel= new RubrosModel();
                $viewBag['rubros']=$rubrosmodel->get();
                $this->render("registraempresa.php",$viewBag);
            }
        }
    }

    public function update($id){
        if(isset($_POST['guardar'])){
            extract($_POST);
            $errores=array();
            $empresa=array();
            $viewBag=array();
            $empresa['cod_empresa']=$id;
            $empresa['nombre_empresa']=$nombre_empresa;
            $empresa['direccion']=$direccion;
            $empresa['nombre_contacto']=$nombre_contacto;
            $empresa['telefono']=$telefono;
            $empresa['correo']=$correo;
            $empresa['porc_comision']=$porc_comision;
            $empresa['cod_rubro']=$cod_rubro;

            if(estaVacio($nombre_empresa)||!isset($nombre_empresa)){
                array_push($errores,'Debes ingresar el nombre de la empresa');
            }

            if(estaVacio($direccion)||!isset($direccion)){
                array_push($errores,'Debes ingresar la dirección de la empresa');
            }

            if(estaVacio($nombre_contacto)||!isset($nombre_contacto)){
                array_push($errores,'Debes ingresar un nombre de contacto de la empresa');
            }

            if(!esTelefono($telefono)||!isset($telefono)){
                array_push($errores,'Debes ingresar un número de telefono válido');
            }

            if(!esMail($correo)||!isset($correo)){
                array_push($errores,'Debes ingresar una dirección de correo válida');
            }

            if(estaVacio($porc_comision)||!isset($porc_comision)){
                array_push($errores,'Debes ingresar el porcentaje de comision de la empresa');
            }

            if(estaVacio($cod_rubro)||!isset($cod_rubro)){
                array_push($errores,'Debes ingresar el codigo del rubro');
            }

            if(count($errores)==0){
                $this->model->updateEmpresa($empresa);
                header('location:/ProyectoCatedra_LIS_Administrador/Empresas/listaEmpresas');
    
            }
            else{
                $viewBag['errores']=$errores;
                $viewBag['empresa']=$empresa;
                $rubrosmodel= new RubrosModel();
                $viewBag['rubros']=$rubrosmodel->get();
                $this->render("editarempresa.php",$viewBag);
            }
        }
    }

 
}
?>