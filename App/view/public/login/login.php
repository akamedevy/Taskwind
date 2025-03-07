<?php
define('BASE_DIR', __DIR__ . '/../../../..');

require_once(BASE_DIR . '/vendor/autoload.php');

// include_once('../../../../vendor/autoload.php');
use App\Entity\Usuario;

if(isset($_POST['logar']))
{
    $usuario = new Usuario();
    $usuario->logar($_POST['senha'], $_POST['email']);
}

require_once(BASE_DIR . '/includes/logar/header-logar.php');
require_once(BASE_DIR . '/includes/logar/form-logar.php');

// include("../../../../includes/cadastrar/header.php");
// include("../../../../includes/logar/form-logar.php");