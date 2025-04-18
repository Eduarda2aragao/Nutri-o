<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuário Cadastrado</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f0f5f1;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            padding: 10px;
            border: 1px solidrgb(10, 39, 102);
            text-align: left;
        }

        th {
            background-color: #e7f5e8;
        }

        button {
            padding: 5px 10px;
            border: none;
            background-color:rgb(12, 8, 224);
            color: white;
            border-radius: 5px;
            cursor: pointer;
            text-transform: uppercase;
        }

        button:hover {
            background-color:rgb(10, 50, 160);
        }

        .edit-form {
            display: none;
            margin-top: 20px;
            background-color: #e7f5e8;
            padding: 20px;
            border: 1px solidrgb(10, 42, 102);
            border-radius: 10px;
        }

        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            border-radius: 5px;
            border: 1px solidrgb(10, 47, 102);
        }
        .support-button {
            position: fixed;
            bottom: 20px; /* Distância do rodapé */
            right: 20px;  /* Distância da lateral direita */
            background-color: #007BFF;
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
            z-index: 10; /* Certifica-se de que o botão fique acima do restante */
        }

        .support-button:hover {
            background-color: #0056b3;
        }

        .support-button img {
            width: 40px;
            height: 40px;
        }
    </style>
</head>
<body>
   <center>
    <h1> Informações</h1>
</center> 
<table>
    <tr>
    <p>Email:</p>
        <input type="text" placeholder="Coloque seu email antigo"></input>
    </tr>
    <tr>
        <p>Email atual:</p>
        <input type="text" placeholder="Coloque seu email atual"></input>
    </tr>
    <tr>
        <p>Senha nova:</p>
        <input type="text" placeholder="Coloque sua nova senha"></input>
    </tr>
    <center>
    <button type="submit" id="Enter">Finalizar</button>
    <a href="Entrar.php"><p>Voltar</a>
    </center>
</table>
</body>
</html>