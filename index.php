<?php
include("controlador/ModelController.php");
session_start();

if(isset($_GET['m']))
    if(method_exists("ModelController",$_GET['m']))
        ModelController::{$_GET['m']}();
    else
        ModelController::index();
else
    ModelController::index();