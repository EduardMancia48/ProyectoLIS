<?php
require_once 'Controller.php';
require_once 'Model/CuponesModel.php';

class CuponesController extends Controller{
    private $model;

    function __construct(){
        
        $this->model=new CuponesModel();

    }

    public function index(){
        $vistaBag=array();
        $cupones=$this->model->getCupones();
        $vistaBag['cupones']=$cupones;
        $this->render("index.php",$vistaBag);
    }

    public function comprar($id){
           if(!$_SESSION['login_data']){
            header('location:/ProyectoCatedra_LIS/Usuarios/login');
            }
           else{
            $vistaBag=array();
            $cupon=$this->model->getCupones($id);
            $vistaBag['cupon']=$cupon[0];
            $this->render("Pago.php",$vistaBag);
           }
    }

    public function confirmar_Compra(){
        if(isset($_POST['confirmar'])){
            extract($_POST);
            $datos=array();
            $bag=array();
            $cant_disponible='';
            $cod_dui=$_SESSION['login_data']['Cod_Dui'];
            $datos['cod_cupon']=$cod_cupon;
            $datos['Cod_Dui']=$cod_dui;
            $datos['cantidad']=$cantidad;
            $cupon=$this->model->getCupones($cod_cupon);
            $bag['cupon']=$cupon[0];
            extract($bag);
            $cantd=$cupon['cant_cupones_disponibles'];
            $nueva=$cantd-$cantidad;
            var_dump($nueva);
            $this->model->comprarCupon($datos);
            $this->model->disminuirCupon($nueva,$cod_cupon);
            header('location:/ProyectoCatedra_LIS/Cupones/confirmacion/'.$cod_cupon);
        }       
    }

    public function confirmacion($id){
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

    public function misCupones(){
        if(!$_SESSION['login_data']){
            header('location:/ProyectoCatedra_LIS/Usuarios/login');
            }
        else{
            $vistaBag=array();
            $cod_dui=$_SESSION['login_data']['Cod_Dui'];
            $cupones=$this->model->ver_MisCupones($cod_dui);
            $vistaBag['cupones']=$cupones;
            $this->render("miscupones.php",$vistaBag);
        }
    }
    
}
?>