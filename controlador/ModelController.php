<?php
include_once("modelo/Model.php");

class ModelController{
    public $model = null;

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
        if($model->num_rows>0){
            header("location: index.php");
        }else{
            echo "Datos incorrectos";
        }
    }
    public static function sudaderas(){
        $model = new Model();
        $datos = $model->mostrar("sudaderas");
        require_once("vista/sudaderas.php");
    }
    public static function playeras(){
        $model = new Model();
        $datos = $model->mostrar("playeras");
        require_once("vista/playeras.php");
    }
    public static function pants(){
        $model = new Model();
        $datos = $model->mostrar("pants");
        require_once("vista/Pants.php");
    }
    public static function chamarras()
    {
        $model = new Model();
        $datos = $model->mostrar("chamarras");

        require_once("vista/Chamarras.php");
    }
}