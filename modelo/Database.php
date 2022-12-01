<?php
class Database{
    public mysqli $conn;
    public String $host = "localhost";
    public String $pass = "";
    public String $dbname = "vooghacs";
    public String $user = "root";

    public function __construct(){
        try{
            $this->conn = new mysqli($this->host,$this->user,$this->pass,$this->dbname);

            if($this->conn->connect_errno){
                throw new Exception("Error en la conexion");
            }
        }catch(Exception $e){
            throw new Exception("Error desconocido: ".$e->getMessage());
        }
    }
}