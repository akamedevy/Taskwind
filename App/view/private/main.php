<?php
session_start();

if(!isset($_SESSION['id_usuario'])){
    header("location: ../public/login/login.php");
}
var_dump($_SESSION);
echo("oi");