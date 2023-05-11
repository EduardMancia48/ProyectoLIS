<?php
require_once 'Controller.php';
require_once 'Model/RubrosModel.php';
require_once 'Core/Validaciones.php';

class RubrosController extends Controller{
    private $model;

    function __construct(){
        
        $this->model=new RubrosModel();

    }

    public function menuRubros(){
        $vistaBag=array();
        $this->render("rubros.php",$vistaBag);
    }

    public function verRegistroRubros(){
        $vistaBag=array();
        $this->render("registrarubro.php",$vistaBag);
    }

    public function listaRubros(){
        $vistaBag=array();
        $rubros=$this->model->get();
        $vistaBag['rubros']=$rubros;
        $this->render("listarubros.php",$vistaBag);
    }

    public function agregarRubro(){
        if(isset($_POST['guardar'])){
            extract($_POST);
            $errores=array();
            $rubro=array();
            $viewBag=array();
            $rubro['cod_rubro']=$cod_rubro;
            $rubro['nombre']=$nombre;

            if(estaVacio($cod_rubro)||!isset($cod_rubro)){
                array_push($errores,'Debes ingresar un codigo para el rubro');
            }
            
            if(estaVacio($nombre)||!isset($nombre)){
                array_push($errores,'Debes ingresar el nombre del rubro');
            }
            
            if(count($errores)==0){
            $this->model->insertarRubro($rubro);
            $_SESSION['success_message']="rubro creado exitosamente";
              header('location:/ProyectoCatedra_LIS_Administrador/Rubros/menuRubros');

            }
            else{
                $viewBag['errores']=$errores;
                $viewBag['rubro']=$rubro;
                $this->render("registrarubro.php",$viewBag);
            }
        }
    }

    public function remover($id){
        $this->model->removerRubro($id);
        $_SESSION['success_message']="rubro eliminado exitosamente";
        header('location:/ProyectoCatedra_LIS_Administrador/Rubros/listaRubros');
    }

    public function edit($id){
        $viewBag=array();
        $rubro=$this->model->get($id);
        $viewBag['rubro']=$rubro[0];
        $this->render("editarubro.php",$viewBag);
    }

    public function update($id){
        if(isset($_POST['guardar'])){
            extract($_POST);
            $errores=array();
            $rubro=array();
            $viewBag=array();
            $rubro['cod_rubro']=$id;
            $rubro['nombre']=$nombre;

            if(estaVacio($nombre)||!isset($nombre)){
                array_push($errores,'Debes ingresar el nombre del rubro');
            }

            if(count($errores)==0){
                $this->model->updateRubro($rubro);
                header('location:/ProyectoCatedra_LIS_Administrador/Rubros/listaRubros');
    
                }
                else{
                    $viewBag['errores']=$errores;
                    $viewBag['rubro']=$rubro;
                    $this->render("editarubro.php",$viewBag);
                }
        }
    }
}
?>