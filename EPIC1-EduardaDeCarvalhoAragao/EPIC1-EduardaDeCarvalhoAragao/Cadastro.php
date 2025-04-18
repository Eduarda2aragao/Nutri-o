
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            background-color: rgba(55, 81, 121, 0.9);;
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        table {
            background-color: rgba(231, 245, 232, 0.9); /* Transparência na cor do fundo */
            border: 2px solidrgb(12, 10, 102);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            position: relative;
            z-index: 2;
        }

        .button {
            text-decoration: none;
            margin-right: 20px;
            background-color:rgb(14, 31, 185);
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            text-transform: uppercase;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color:rgb(10, 32, 160);
        }

        .info {
            font-size: 18px;
            padding: 10px;
            color:rgb(10, 61, 102);
        }

        input.sit {
            height: 30px;
            width: 100%;
            border: 1px solidrgb(10, 27, 102);
            border-radius: 5px;
            padding: 5px;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            font-size: 20px;
            color:rgb(10, 19, 102);
        }

        h4 {
            font-size: 25px;
            background-color:rgb(10, 16, 102);
            color: white;
            padding: 15px;
            border-radius: 5px;
            text-align: center;
        }

        .error {
            color: red;
            font-size: 14px;
        }

        .success {
            color: green;
            font-size: 14px;
        }
        .support-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color:rgb(37, 49, 211);
            border: none;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            transition: background-color 0.3s ease;
            z-index: 10;
        }

        .support-button:hover {
            background-color:rgb(6, 76, 117);
        }

        .support-button img {
            width: 40px;
            height: 40px;
        }

        a{
            text-decoration: none;
        }
        .aling{
          margin-right: 20px;
        }
    
    </style>
</head>
<body>
    <?php
    // Inicializando variáveis para capturar erros
    $errors = array();
    $success = "";

    // Verificação se o formulário foi submetido
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = trim($_POST['nome']);
        $sobrenome = trim($_POST['sobrenome']);
        $email = trim($_POST['email']);
        $senha = $_POST['senha'];

        // Verificar se todos os campos estão preenchidos
        if (empty($nome)) {
            $errors['nome'] = "O campo Nome é obrigatório.";
        }
        if (empty($sobrenome)) {
            $errors['sobrenome'] = "O campo Sobrenome é obrigatório.";
        }
        if (empty($email)) {
            $errors['email'] = "O campo Email é obrigatório.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Digite um email válido.";
        }
        if (empty($senha)) {
            $errors['senha'] = "O campo Senha é obrigatório.";
        } else {
            // Verificar a segurança da senha
            if (strlen($senha) < 8) {
                $errors['senha'] = "A senha deve ter no mínimo 8 caracteres.";
            }
            if (!preg_match('/[A-Z]/', $senha)) {
                $errors['senha'] = "A senha deve ter pelo menos uma letra maiúscula.";
            }
            if (!preg_match('/[a-z]/', $senha)) {
                $errors['senha'] = "A senha deve ter pelo menos uma letra minúscula.";
            }
            if (!preg_match('/[0-9]/', $senha)) {
                $errors['senha'] = "A senha deve ter pelo menos um número.";
            }
        }
        if (empty($errors)) {
            require_once 'conexão.php'; // Inclui a conexão
            require_once 'GeteSet.php'; // Inclui a classe do usuário
            require_once 'ClassDao.php'; // Inclui a classe do DAO
    
            // Cria um novo objeto usuário
            $novoUsuario = new ClassUsuario($nome, $sobrenome, $email, $senha);
    
            // Instancia a classe DAO
            $usuarioDAO = new ClassUsuarioDAO();
            if ($usuarioDAO->cadastrar($novoUsuario)) {
                header("Location:Entrar.php");
             exit();
            } else {
                $errors['geral'] = "Tente novamente";
            }
        
        }
    }
    ?>
    <table>
        <tr>
            <th colspan="2"><h4>Faça seu cadastro!</h4></th>
        </tr>
        <form action="" method="POST">
            <tr>
                <td class="info">Nome:</td>
                <td>
                    <input class="sit" type="text" name="nome" maxlength="40" placeholder="Digite seu nome" value="<?php echo isset($nome) ? $nome : ''; ?>" />
                    <?php if (isset($errors['nome'])) echo "<p class='error'>{$errors['nome']}</p>"; ?>
                </td>
            </tr>
            <tr>
                <td class="info">Sobrenome:</td>
                <td>
                    <input class="sit" type="text" name="sobrenome" placeholder="Digite seu sobrenome" value="<?php echo isset($sobrenome) ? $sobrenome : ''; ?>" />
                    <?php if (isset($errors['sobrenome'])) echo "<p class='error'>{$errors['sobrenome']}</p>"; ?>
                </td>
            </tr>
            <tr>
                <td class="info">Email:</td>
                <td>
                    <input class="sit" type="email" name="email" maxlength="40" placeholder="Digite seu email" value="<?php echo isset($email) ? $email : ''; ?>" />
                    <?php if (isset($errors['email'])) echo "<p class='error'>{$errors['email']}</p>"; ?>
                </td>
            </tr>
            <tr>
                <td class="info">Senha:</td>
                <td>
                    <input class="sit" type="password" name="senha" minlength="8" placeholder="Digite sua senha" value="<?php echo isset($senha) ? $senha : ''; ?>"/>
                    <?php if (isset($errors['senha'])) echo "<p class='error'>{$errors['senha']}</p>"; ?>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <button class="button" type="submit">Cadastrar</button>
                  
                </td>
</tr>
        </form>
    </table>
    </body>
</html>