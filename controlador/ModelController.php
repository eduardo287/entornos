<?php
include_once("modelo/Model.php");
include_once("modelo/ModelProducto.php");
require_once("vista/layouts/mensaje.php");

class ModelController{

    public static function index(){
        require_once("vista/index.php");
    }
    public static function registrarse(){
        $model = new Model();
        if($model->registrarUsuario()){
            echo "Registro Exitoso";
        }else{
            throw new Exception("Correo ya registrado");
        }
    }
    public static function formularioRegistro(){
        require_once("vista/FormularioVG.php");
    }
    public static function formularioLoguearse(){
        require_once("vista/loginVG.php");
    }
    public static function login(){
        $model = new Model();
        $model = $model->login();

        if($model){
            mensaje("Bienvenido ".$_SESSION['usuario'][1],"?m=index");
        }else{
            mensaje("Datos Incorrectos","?m=formularioLoguearse");
        }
    }
    public static function sudaderas(){
        $model = new ModelProducto();
        $datos = $model->mostrar("sudaderas");
        require_once("vista/sudaderas.php");
    }
    public static function playeras(){
        $model = new ModelProducto();
        $datos = $model->mostrar("playeras");
        require_once("vista/playeras.php");
    }
    public static function pants(){
        $model = new ModelProducto();
        $datos = $model->mostrar("pants");
        require_once("vista/Pants.php");
    }
    public static function chamarras()
    {
        $model = new ModelProducto();
        $datos = $model->mostrar("chamarras");

        require_once("vista/Chamarras.php");
    }
    public static function cerrar(){
        session_destroy();
        header("location: index.php");
    }
    public static function agregarProduc(){
        require_once("vista/registrarProducto.php");
    }
    public static function registrarProduct(){
        $model = new ModelProducto();

        if(!$model->create()){
            mensaje("Producto no agregado","?m=agregarProduc");
        }else{
            mensaje("Producto Registrado","?m=agregarProduc");
        }
    }
    public static function eliminarProductoFormulario(){
        require_once("vista/eliminarProducto.php");
    }
    public static function eliminarProducto(){
        $model = new ModelProducto();

        if($model->delete()){
            mensaje("Producto eliminado","?m=eliminarProductoFormulario");
        }else{
            mensaje("No se ha podido eliminar el producto","?m=eliminarProductoFormulario");
        }
    }
    public static function actualizarProductoFormulario(){
        require_once("vista/actualizarProducto.php");
    }
    public static function actualizarProduct(){
        $model = new ModelProducto();
        if($model->update()){
            mensaje("Producto Actualizado correctamente","?m=actualizarProductoFormulario");
        }else{
            mensaje("No se pudo Actualizar :(","?m=actualizarProductoFormulario");
        }
    }
}