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
        header('location:/ProyectoCatedra_LIS_Administrador/Usuarios/login');
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
                header('location:/ProyectoCatedra_LIS_Administrador/Empresas');
               
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

    public function addEmployee(){
        if(isset($_POST['registrar'])){
            extract($_POST);
            $errores=array();
            $empleado=array();
            $vistaBag=array();
            $empleado['cod_empleado']=$cod_empleado;
            $empleado['nombre']=$nombre;
            $empleado['apellido']=$apellido;
            $empleado['correo']=$correo;
            $empleado['contrasena']=$contrasena;

            if(!esCodEmpleado($cod_empleado)||!isset($cod_empleado)){
                array_push($errores,'Debes ingresar un codigo de empleado válido');
            }

            if(estaVacio($nombre)||!isset($nombre)){
                array_push($errores,'Debes ingresar un nombre');
            }

            if(estaVacio($apellido)||!isset($apellido)){
                array_push($errores,'Debes ingresar un apellido');
            }

            if(!esMail($correo)){
                array_push($errores,'Debes ingresar una direccion de correo valida');
            }

            if(count($errores)==0){
                $this->model->registrarEmployee($empleado);
                $_SESSION['success_message']="usuario registrado exitosamente";
                  header('location:/ProyectoCatedra_LIS_Administrador/Usuarios/login');
            }

            else{
                $vistaBag['errores']=$errores;
                $vistaBag['empleado']=$empleado;
                $this->render("register.php",$vistaBag);
            }
    }
}
}
?>