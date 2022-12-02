<?php
include_once("Database.php");
class ModelProducto{
    public $conn;
    public String $claveProduct;
    public String $nomProduct;
    public String $marca;
    public String $precio;
    public String $color;
    public String $talla;
    public String $existencias;
    public String $categoria;
    public $datos;

    public function __construct(){
        $this->conn =new Database();
        $this->conn = $this->conn->conn;
        $this->datos = array();
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
        $consulta->close();
        return $this->datos;
    }
    public function update(){
        if(!isset($_POST['claveProduct']) && !isset($_POST['color']) && !isset($_POST['nomProduct']) && !isset($_POST['txtMarca']) && !isset($_POST['precio']) && !isset($_POST['talla']) && !isset($_POST['existencias'])){
            throw new Exception("Debes llenar todos los campos");
        }
        $this->claveProduct = $_POST['claveProduct'];
        $this->nomProduct = $_POST['nomProduct'];
        $this->marca = $_POST['txtMarca'];
        $this->precio = $_POST['precio'];
        $this->talla = $_POST['talla'];
        $this->color = $_POST['color'];
        $this->existencias = $_POST['existencias'];
        $this->categoria = $_POST['categoria'];

        try {
            $consulta = $this->conn->prepare("UPDATE productos SET nombre_producto=?,marca=?,precio=?,color=?,talla=?,existencias=?,categoria=? WHERE id_producto = ?");
            $consulta->bind_param("ssssssss",$this->nomProduct,$this->marca,$this->precio,$this->color,$this->talla,$this->existencias,$this->categoria,$this->claveProduct);
            $consulta->execute();
            $result = $consulta->affected_rows > 0;
            $consulta->close();
        }catch (Exception $e){
            $result = false;
        }

        return $result;
    }
    public function create(){
        if(!isset($_POST['claveProduct']) && !isset($_POST['color']) && !isset($_POST['nomProduct']) && !isset($_POST['txtMarca']) && !isset($_POST['precio']) && !isset($_POST['talla']) && !isset($_POST['existencias'])){
            throw new Exception("Debes llenar todos los campos");
        }

        $this->claveProduct = $_POST['claveProduct'];
        $this->nomProduct = $_POST['nomProduct'];
        $this->marca = $_POST['txtMarca'];
        $this->precio = $_POST['precio'];
        $this->talla = $_POST['talla'];
        $this->color = $_POST['color'];
        $this->existencias = $_POST['existencias'];
        $this->categoria = $_POST['categoria'];

        try{
            $consulta = $this->conn->prepare("INSERT INTO productos(id_producto,nombre_producto,marca,precio,color,talla,existencias,categoria) VALUES(?,?,?,?,?,?,?,?)");
            $consulta->bind_param("ssssssss",$this->claveProduct,$this->nomProduct,$this->marca,$this->precio,$this->color,$this->talla,$this->existencias,$this->categoria);
            $consulta->execute();
            $result = $consulta->affected_rows > 0;
            $consulta->close();
        }catch(Exception $e){
            $result = false;
        }

        return $result;
    }
    public function delete(){
        if(!isset($_POST['claveProduct']) && !isset($_POST['color']) && !isset($_POST['nomProduct']) && !isset($_POST['txtMarca']) && !isset($_POST['precio']) && !isset($_POST['talla']) && !isset($_POST['existencias'])){
            throw new Exception("Debes llenar todos los campos");
        }
        $this->claveProduct = $_POST['claveProduct'];
        $consulta = $this->conn->prepare("DELETE FROM productos WHERE id_producto = ?");
        $consulta->bind_param("i",$this->claveProduct);
        $consulta->execute();
        $result = $consulta->affected_rows > 0;
        $consulta->close();

        return $result;
    }
}