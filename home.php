<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

    <?= "<h1 style='text-align: center;'>Bem vindo {$_SESSION['login']}!</h1>";?>

    <div class="divisao">   
        <form method="post">
            <legend>Cadastrar novo usuário</legend>
            <label for="login">Login</label>
            <input type="text" name='login_novo' id='login' required>

            <label for="senha">Senha</label>
            <input type="password" name='senha_nova' id='senha' required>
            <input class="e" type="submit" name='cadastrar' value='CADASTRAR'>

            <button><a href="?logaut">Fazer logaut</a></button>
        </form>
    </div>

    <?php

        /*require_once 'Usuario.php';
        //include 'index.php';

        if (isset($_POST['cadastrar'])) {
            //chamar a função de cadastro
            $login_a_cadastrar = $_POST['login_novo'];
            $senha_a_cadastrar = $_POST['senha_nova'];

            $banco_de_cadastro = [
                'adm' => '1002'
            ];

            $logar = new Usuario();
                $logar->login = 'adm';
                $logar->senha = '1002';

            $banco_de_cadastro = $logar->cadastrar($banco_de_cadastro, $login_a_cadastrar, $senha_a_cadastrar);
        }*/
    ?>
    
</body>
</html>