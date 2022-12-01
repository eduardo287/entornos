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

        $this->nombre = $_POST['nom'];
        $this->apellidoPat = $_POST['apellidoPat'];
        $this->apellidoMat = $_POST['apellidoMat'];
        $this->email = $_POST['email'];
        $this->pass = $_POST['pass']; 

        $consulta = $this->conn->prepare("INSERT INTO usuario(`nombre`,`apellido_pat`,`apellido_mat`,`email`,`pass`) VALUES(?,?,?,?,?)");
        $consulta->bind_param("sssss",$this->nombre,$this->apellidoPat,$this->apellidoMat,$this->email,$this->pass);
        $result = $consulta->execute();
        $consulta->close();

        return $result;
    }
    public function login(){
        $this->email = $this->email = $_POST['email'];
        $this->pass = $this->pass = $_POST['pass'];

        $consulta = $this->conn->prepare("SELECT * FROM usuario WHERE email = ? AND pass = ?");
        $consulta->bind_param("ss",$this->email,$this->pass);

        return $consulta->get_result();
    }
    public function mostrar($categoria){
        $sql = "SELECT nombre_producto,precio,color,talla,marca FROM productos WHERE categoria = '$categoria'";
        $consulta = $this->conn->query($sql);
        $this->datos = array("nombre_producto"=>array(),"precio"=>array(),"color"=>array(),"talla"=>array(),"marca"=>array());
        $i = 0;
        while($fila = mysqli_fetch_row($consulta)){
            $this->datos["nombre_producto"][$i] = $fila[0];
            $this->datos["precio"][$i] = $fila[1];
            $this->datos["color"][$i] = $fila[2];
            $this->datos["talla"][$i] = $fila[3];
            $this->datos["marca"][$i] = $fila[4];
            $i++;
        }
        return $this->datos;
    }
}