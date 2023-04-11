<?php
require_once 'Controller.php';
require_once 'Model/UsuariosModel.php';
require_once 'Core/Validaciones.php';

class UsuariosController extends Controller{

    function __construct(){
        
        $this->model=new UsuariosModel();

    }

    public function login(){
        $this->render("login.php");
    }

    public function logout(){
        session_unset();
        session_destroy();
        header('location:/ProyectoCatedra_LIS/Usuarios/login');
    }

    public function validate(){
        if(isset($_POST['enviar'])){
            $model=new UsuariosModel();
            $email=$_POST['email'];
            $pass=$_POST['contrasena'];
    
            if(!empty($model->validarUser($email,$pass))){
                $login_data=$model->validarUser($email,$pass);
                $login_data=$login_data[0];
                $_SESSION['login_data']=$login_data;
                header('location:/ProyectoCatedra_LIS/Cupones');
               
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

    public function addUser(){
        if(isset($_POST['registrar'])){
            extract($_POST);
            $errores=array();
            $usuario=array();
            $vistaBag=array();
            $cod_dui="";
            $usuario['cod_Dui']=$cod_Dui;
            $usuario['nombre']=$nombre;
            $usuario['apellido']=$apellido;
            $usuario['telefono']=$telefono;
            $usuario['correo']=$correo;
            $usuario['direccion']=$direccion;
            $usuario['contrasena']=$contrasena;

            if(!esDui($cod_Dui)){
                array_push($errores,'Debes ingresar un Dui valido');
            }

            if(estaVacio($nombre)||!isset($nombre)){
                array_push($errores,'Debes ingresar un nombre');
            }

            if(estaVacio($apellido)||!isset($apellido)){
                array_push($errores,'Debes ingresar un apellido');
            }

            if(!esTelefono($telefono)){
                array_push($errores,'Debes ingresar un teléfono valido');
            }

            if(!esMail($correo)){
                array_push($errores,'Debes ingresar una direccion de correo valida');
            }

            if(estaVacio($direccion)||!isset($direccion)){
                array_push($errores,'Debes ingresar una direccion');
            }

            if(count($errores)==0){
                $this->model->registrarUser($usuario);
                $_SESSION['success_message']="usuario registrado exitosamente";
                  header('location:/ProyectoCatedra_LIS/Usuarios/login');
            }

            else{
                $vistaBag['errores']=$errores;
                $vistaBag['usuario']=$usuario;
                $this->render("register.php",$vistaBag);
            }
    }
}
}
?>