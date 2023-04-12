<?php
abstract class ModelwPDO{
    private $servidor="localhost";
    private $usuario="root";
    private $contraseña="";
    private $bd="dbcupones";
    private $conn;

    //Método para abrir la conexion con la base de datos
    protected function openConnection(){
        try{
           $this->conn=new PDO("mysql:host=$this->servidor;dbname=$this->bd;charset=utf8",$this->usuario,$this->contraseña);
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    
    //Método para cerrar la conexion con la base de datos
    protected function closeConnection(){
        $this->conn=null;
    }

    //Método que permite ejecutar consultas de selección
    protected function getQuery($query,$params=array()){
        try{
            $this->openConnection();
            $st=$this->conn->prepare($query);
            $st->execute($params);
            $rows=$st->fetchAll();
            $this->closeConnection();
            return $rows;
        }
        catch(exception $e){
            $this->closeConnection();
            return null;
        }
    }

    //Método que permite ejecutar consultas de escritura
    protected function setQuery($query,$params=array()){
        try{
            $this->openConnection();
            $st=$this->conn->prepare($query);
            $st->execute($params);
            $affectedRows=$st->rowCount();
            $this->closeConnection();
            return $affectedRows;
        }
        catch(Exception $e){
            echo $e->getMessage();
            $this->closeConnection();
            return -1;
        }
    }

}
?>