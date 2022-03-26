<?php session_start() ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        if (! isset($_SESSION['login'])) {
            //Verificando se existe a sessão login
            if (isset($_POST['acao'])) {
                //Verificando se o botão do formulário foi clicado

                $login_form = $_POST['login'];
                $senha_form = $_POST['senha'];

                require_once 'Usuario.php';
                $logar = new Usuario();
                $logar->login = $login_form;
                $logar->senha = $senha_form;
                //Armazenando os valores inseridos no formulário

                $banco_de_cadastro = [
                    'adm' => '1002'
                ];

                $logar->verificar($banco_de_cadastro);

            }
            include 'login.php';

        } else {
            include 'home.php';

            if (isset($_GET['logaut'])) {
                unset($_SESSION['login']);
                //session_destroy();
                header('Location: index.php');
            }
            /*if (isset($_GET['cadastro'])) {
                header('Location: cadastro.php');
            }*/
        }
    ?>

</body>
</html>