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
                echo '<h1 style="text-align: center;">Login ou senha inválido</h1>';
            }
        }
    }

    /*public function cadastrar($banco_de_cadastro, $login_a_cadastrar, $senha_a_cadastrar) {
        $banco_de_cadastro[$login_a_cadastrar] = $senha_a_cadastrar;
        return $banco_de_cadastro;
    }*/
}