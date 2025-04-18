    <?php
    session_start(); // Inicia a sessão para armazenar informações do usuário
    require_once 'conexão.php'; // Inclui a conexão
    ?>
        
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Usuário Cadastrado</title>
        
        <style>
            * {
                margin: 0;
                padding: 0;
            }

            body {
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                background-image: url('img/entar.jpg');
                background-size: cover;
                background-position: center;
                height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
                color:rgb(10, 12, 102);
            }
            table {
                background-color: #e7f5e8;
                border: 2px solidrgb(10, 31, 102);
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            }

            .button {
                text-decoration: none;
                background-color:rgb(8, 22, 224);
                color: white;
                padding: 10px 15px;
                border: none;
                border-radius: 5px;
                text-transform: uppercase;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }

            .button:hover {
                background-color:rgb(10, 37, 160);
            }

            .info {
                font-size: 18px;
                padding: 10px;
                color:rgb(10, 31, 102);
            }

            input.sit {
                height: 30px;
                width: 100%;
                border: 1px solidrgb(10, 47, 102);
                border-radius: 5px;
                padding: 5px;
            }

            th, td {
                padding: 10px;
                text-align: left;
            }

            th {
                font-size: 20px;
                color:rgb(10, 31, 102);
            }

            h4 {
                font-size: 25px;
                background-color:rgb(10, 42, 102);
                color: white;
                padding: 15px;
                border-radius: 5px;
                text-align: center;
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
                background-color:rgb(18, 30, 140);
            }

            .support-button img {
                width: 40px;
                height: 40px;
            }

            a{
                text-decoration: none;
            }
        </style>
    </head>
    <body>
    <?php
    require_once 'conectando.php'; 

    $pdo = Conectando::getInstance();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $email = $_POST['email'] ?? '';
        $senha = $_POST['senha'] ?? '';
        if (!empty($email) && !empty($senha)) {
            try {
                $sql_code = "SELECT * FROM Cadastro WHERE email = :email"; 
                $stmt = $pdo->prepare($sql_code);
                $stmt->bindValue(':email', $email);  
                $stmt->execute();  
                if ($stmt->rowCount() === 1) {
                    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
                    if (password_verify($senha, $usuario['senha'])) {
                        $_SESSION['id'] = $usuario['id'];
                        $_SESSION['nome'] = $usuario['nome'];
                        header("Location: inicio.php");
                        exit();
                    }
                    if (empty($errors)) {
                        require_once 'conexão.php'; // Inclui a conexão
                        require_once 'GeteSet.php'; // Inclui a classe do usuário
                        require_once 'ClassDao.php'; // Inclui a classe do DAO
                
                        // Cria um novo objeto usuário
                        $login = new ClassUsuariod($email, $senha);
                
                        // Instancia a classe DAO
                        $usuarioDAO = new ClassUsuariod();
                        if ($usuarioDAO->login($loginUsuario)) {
                            header("Location:Entrar.php");
                         exit();
                        } else {
                            $errors['geral'] = "Tente novamente";
                        }
                    }
                }
            } catch (PDOException $e) {
            }
        }
    }
    
    ?>
        <table>
            <tr>
                <th colspan="2"><h4>Usuário Cadastrado</h4></th>
            </tr>
            <form action="Receitas.php" method="POST">
                <tr>
                    <td class="info">Email:</td>
                    <td><input class="sit" type="email" id="email" name="email" maxlength="40" placeholder="Digite seu email" /></td>
                </tr>
                <tr>
                    <td class="info">Senha:</td>
                    <td><input class="sit" type="password" minlength="8" name="senha" placeholder="Digite sua senha"/></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;">
                <button class="button" type="submit">Entrar</button>
                    </td>

                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;">
                        <p><a href="UsuarioNovo.php">Atualização de cadastro</a></p><br>
                    </td>
                </tr>
            </form>
        </table>

    </body>
    </html>





    

    <?php


    ?>
