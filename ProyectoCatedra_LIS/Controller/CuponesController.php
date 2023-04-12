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
        $cupones=$this->model->listCupones();
        $vistaBag['cupones']=$cupones;
        $this->render("index.php",$vistaBag);
    }
}
?>