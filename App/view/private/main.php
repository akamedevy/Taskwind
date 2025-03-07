<?php
session_start();

if(!isset($_SESSION['id_usuario'])){
    header("location: ../public/login/login.php");
}
// var_dump($_SESSION);
echo("oi");

if(isset($_POST['opcao']))
{
    var_dump($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../src/output.css">
    <title>Todo-app</title>
</head>
<body class="h-screen overflow-hidden items-center justify-center flex flex-col bg-gray-900">

<form method="POST">
  <select name="opcao" onchange="this.form.submit()">
    <option value="">Selecione uma opção</option>
    <option value="opcao1">Opção 1</option>
    <option value="opcao2">Opção 2</option>
    <option value="opcao3">Opção 3</option>
  </select>
</form>