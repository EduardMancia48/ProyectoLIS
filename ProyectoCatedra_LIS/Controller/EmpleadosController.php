<?php
require_once 'Controller.php';
require_once 'Model/UsuariosModel.php';
require_once 'Model/EmpleadosModel.php';
require_once 'Core/Validaciones.php';
class EmpleadosController extends Controller{
    private $model;
    function __construct(){
        
        $this->model=new EmpleadosModel();

    }

    public function listar(){
        $empleados = $this->model->listarEmpleados();
        $this->render("listar_empleados.php", ['empleados' => $empleados]);
    }


  
    public function agregar(){
        $this->render("crear_empleado.php");
    }


    public function guardar(){
        $model=new EmpleadosModel();
        $cod_empleado=$_POST['cod_empleado'];
        $nombres=$_POST['nombres'];
        $apellidos=$_POST['apellidos'];
        $correo=$_POST['correo'];
        $contraseña=$_POST['contraseña'];
        $cod_rol=$_POST['cod_rol'];
        $empleado=array('cod_empleado'=>$cod_empleado, 'nombres'=>$nombres, 'apellidos'=>$apellidos, 'correo'=>$correo, 'contraseña'=>$contraseña, 'cod_rol'=>$cod_rol);
    
        if(!empty($model->crearEmpleado($empleado))){
            $_SESSION['success_message']="Empleado creado exitosamente";
            header('location:/ProyectoCatedra_LIS/Empleados/listar');
        }
        else{
            $errores=array();
            $vistaBag=array();
            array_push($errores,"Hubo un error al guardar el empleado");
            $vistaBag['errores']=$errores;
            $this->render("agregar_empleado.php",$vistaBag);
        }
    }

    public function eliminar($id){
        $this->model->eliminarEmpleado($id);
        $_SESSION['success_message']="empleado eliminado exitosamente";
        header('location:/ProyectoCatedra_LIS/Empleados/listar');
       
    }
    

    public function editEmpleado(){
        if(isset($_POST['editar'])){
          $model=new EmpleadosModel();
          $cod_empleado=$_POST['cod_empleado'];
          $nombres=$_POST['nombres'];
          $apellidos=$_POST['apellidos'];
          $correo=$_POST['correo'];
          $contraseña=$_POST['contraseña'];
          $cod_rol=$_POST['cod_rol'];
          $empleado=array('cod_empleado'=>$cod_empleado, 'nombres'=>$nombres, 'apellidos'=>$apellidos, 'correo'=>$correo, 'contraseña'=>$contraseña, 'cod_rol'=>$cod_rol);
      
          if(!empty($model->editarEmpleado($empleado))){
            $_SESSION['success_message']="Empleado actualizado exitosamente";
            header('location:/ProyectoCatedra_LIS/Empleados');
          }
          else{
            $errores=array();
            $vistaBag=array();
            array_push($errores,"Hubo un error al actualizar el empleado");
            $vistaBag['errores']=$errores;
            $this->render("editar_empleado.php",$vistaBag);
          }
        }
      }
      

}