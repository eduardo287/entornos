<?php
include_once("Database.php");
class Model{
    public $conn;
    public String $nombre  = "";
    public String $apellidoPat = "";
    public String $apellidoMat = "";
    public String $email  = "";
    public String $pass = "";
    public $datos;

    public function __construct(){
        $this->conn =new Database();
        $this->conn = $this->conn->conn;
        $this->datos = array();
    }
    public function registrarUsuario(){
        if(!isset($_POST['nom']) && !isset($_POST['apellidoPat']) && !isset($_POST['apMat']) && !isset($_POST['email']) && !isset($_POST['pass'])){
            throw new Exception("Debes llenar todos los campos");
        }
        //pendiente
        $this->nombre = $_POST['nom'];
        $this->apellidoPat = $_POST['apellidoPat'];
        $this->apellidoMat = $_POST['apellidoMat'];
        $this->email = $_POST['email'];
        $this->pass = $_POST['pass']; 

        try{
            $consulta = $this->conn->prepare("INSERT INTO usuario(`nombre`,`apellido_pat`,`apellido_mat`,`email`,`pass`) VALUES(?,?,?,?,?)");
            $consulta->bind_param("sssss",$this->nombre,$this->apellidoPat,$this->apellidoMat,$this->email,$this->pass);
            $consulta->execute();
            $result = $consulta->affected_rows > 0;
            $consulta->close();
        }catch (Exception $e){
            $result = false;
        }

        return $result;
    }
    public function login(){
        $this->email = $_POST['email'];
        $this->pass = $_POST['pass'];

        try{
            $consulta = $this->conn->prepare("call login(?,?)");
            $consulta->bind_param("ss",$this->email,$this->pass);
            $consulta->execute();
            $datos = $consulta->get_result();
            $result = $consulta->affected_rows > 0;
            if($result)
                $_SESSION['usuario'] = mysqli_fetch_row($datos);
        }catch (Exception $e){
            $result = false;
        }
        return $result;
    }
    public function create(){
        if(!isset($_POST['clave']) && !isset($_POST['apellidoPat']) && !isset($_POST['apMat']) && !isset($_POST['email']) && !isset($_POST['pass'])){
            throw new Exception("Debes llenar todos los campos");
        }
        try{
            $consulta = $this->conn->prepare("INSERT INTO productos(nombre_producto,marca,precio,color,talla,existencias) VALUES(?,?,?,?,?,?)");
            $consulta->bind_param("ssssss",$s);
            $consulta->execute();
            $result = $consulta->affected_rows > 0;

            $consulta->close();
        }catch (Exception $e){
            $result = false;
        }
        return $result;
    }
}