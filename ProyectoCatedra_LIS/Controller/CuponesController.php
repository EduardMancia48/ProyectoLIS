<?php
require_once 'Controller.php';
require_once 'Model/CuponesModel.php';

class CuponesController extends Controller{
    private $model;

    function __construct(){
        if(is_null( $_SESSION['login_data'])){
            header('location:/ProyectoCatedra_LIS/Usuarios/login');
        }
        else{
        $this->model=new CuponesModel();
        }

    }

    public function index(){
        $vistaBag=array();
        $cupones=$this->model->getCupones();
        $vistaBag['cupones']=$cupones;
        $this->render("index.php",$vistaBag);
    }

    public function comprar($id){
        $vistaBag=array();
        $cupon=$this->model->getCupones($id);
        $vistaBag['cupon']=$cupon[0];
        $this->render("Pago.php",$vistaBag);
    }

    public function confirmar_Compra($id){
        $vistaBag=array();
        $cupon=$this->model->getCupones($id);
        $vistaBag['cupon']=$cupon[0];
        $this->render("confirmacion.php",$vistaBag);
    }

    public function generar_PDF($id){
        $vistaBag=array();
        $cupon=$this->model->getCupones($id);
        $vistaBag['cupon']=$cupon[0];
        $this->render("generar_pdf.php",$vistaBag);
    }
    
}
?>