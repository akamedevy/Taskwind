<?php
namespace App\Entity;
use App\DB\Database;

class Usuario{

    public function __construct()
    {
        $this->db = new Database;
    }

    public function cadastrar($nome, $email, $senha)
    {
        $resultado = $this->db->insert('usuarios',
                    [
                    'nome' => $nome,
                    'email' => $email,
                    'senha' => $senha
                    ]
                );

        if($resultado)
        {
            return TRUE;
        }
        else{
            return FALSE;
        }
    }

    public function logar($senha, $email)
    {

        $this->usuario = $this->db->select(
            table: "usuarios",
            where: "email = '" . $email . "'",
        );

        if(!$this->usuario){
            $this->invalido();
        }

        $this->usuario = $this->usuario[0];

        if ($this->usuario && $senha == $this->usuario['senha'])
        {
            session_start();
            $_SESSION['id_usuario'] = $this->usuario['id'];
            $_SESSION['nome'] = $this->usuario['nome'];
            $_SESSION['email'] = $this->usuario['email'];
            $_SESSION['senha'] = $this->usuario['senha'];
            
            echo '<script> alert("Logou") </script>';
            echo "<meta http-equiv='refresh' content='0.5;url=../../private/main.php'>";

        }
        else{
            $this->invalido();
        }


    }

    public function invalido(){
        echo '<script> alert("Email ou senha incorretos") </script>';
        echo "<meta http-equiv='refresh' content='0.5;url=login.php'>";
        die();
    }
}