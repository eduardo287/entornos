<?php
include_once("config/config.php");
class Database{
    public mysqli $conn;

    public function __construct(){
        try{
            $this->conn = new mysqli(host,user,password,dbname,port);

            if($this->conn->connect_errno){
                throw new Exception("Error en la conexion");
            }
        }catch(Exception $e){
            throw new Exception("Error desconocido: ".$e->getMessage());
        }
    }
}