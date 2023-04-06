<?php
require_once 'Controller.php';
require_once 'Model/UsuariosModel.php';

class UsuariosController extends Controller{

    public function login(){
        $this->render("login.php");
    }

    public function logout(){
        session_unset();
        session_destroy();
        header('location:'.PATH.'/Usuarios/login');
    }

    public function validate(){
        $model=new UsuariosModel();
        $email=$_POST['email'];
        $pass=$_POST['clave'];

        if(!empty($model->validarUser($email,$pass))){
            $login_data=$model->validarUser($email,$pass);
            $login_data=$login_data[0];
            $_SESSION['login_data']=$login_data;
            header('location:'.PATH.'/Cupones');
           
        }
        else{
            $errores=array();
            $vistaBag=array();
            array_push($errores,"El correo y/o password son incorrectos");
            $vistaBag['errores']=$errores;
            $this->render("login.php",$vistaBag);
        }
    }
}
?>