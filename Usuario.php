<?php

class Usuario
{
    //dados do usuario
    public $login;
    public $senha;

    public function verificar(array $banco_de_cadastro)
    {
        $logou = False;
        foreach ($banco_de_cadastro as $usario => $senha) {
            
            if ($this->login == $usario && $this->senha == $senha) {
                echo 'Login válido';
                $_SESSION['login'] = $usario;
                header('Location: index.php');
            } else {
                echo 'Login ou senha inválido';
            }
        }
    }
}