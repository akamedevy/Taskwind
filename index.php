<?php
include(__DIR__.'/vendor/autoload.php');
use App\Entity\Usuario;

if(isset($_POST['cadastrar']))
{
    $usuario = new Usuario();
    $usuario->cadastrar($_POST['nome'], $_POST['email'], $_POST['senha']);

    if($usuario){
        header("location: App/view/public/login/login.php");
    }
    else{
        echo("erro");
    }
}

include (__DIR__.'/includes/cadastrar/header.php');
include (__DIR__.'/includes/cadastrar/form-cadastrar.php');