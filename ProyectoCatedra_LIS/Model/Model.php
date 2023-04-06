<?php
abstract class ModelwPDO{
    private $servidor="localhost";
    private $usuario="root";
    private $contraseña="";
    private $bd="dbcupones";
    protected $dbh; //Database Handler

    //Método para abrir la conexion con la base de datos
    private function openConnection(){
        $dsn="mysql:host=$this->servidor;dbname=$this->bd";
        $this->dbh=new PDO($dsn, $this->usuario,$this->contraseña);
    }
    
    //Método para cerrar la conexion con la base de datos
    private function closeConnection(){
        $this->dbh=null;
    }

    //Método que permite ejecutar consultas de selección
    protected function getQuery($query,$params=array()){
        try{
            $rows=[];
            $this->openConnection();
            $st=$this->dbh->prepare($query);
            $st->execute($params);
            $rows=$st->fetchAll();
            $this->closeConnection();
            return $rows;
        }
        catch(exception $e){
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