<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <title>Blog Nutrição Fitness</title>
    <link rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Times;
        }

        .menu {
            text-align: center;
            height: 70px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: linear-gradient(45deg,rgb(8, 60, 95),rgb(0, 62, 196),rgb(3, 13, 46));
            position: absolute;
            top: 0;
            width: 100%;
            z-index: 1;
        }

        .logo {
            margin-left: 20px;
            font-size: 24px;
            font-weight: bold;
            color: #fff;
            font-family: "Alegreya", serif;
        }

        .a1 {
            color: rgb(255, 255, 255);
            text-decoration: none;
            padding: 10px 20px;
            text-transform: uppercase;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            transition: background-color 0.3s ease, color 0.3s ease;
            border-radius: 20px;
        }

        .a1:hover {
            color:rgb(6, 114, 255);
            background-color: rgba(136, 134, 134, 0.5);
        }

        .button {
            text-decoration: none;
            margin-right: 20px;
            background-color:rgb(16, 75, 185);
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            text-transform: uppercase;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        .button:hover {
            background-color:rgb(4, 69, 99);
        }

        img {
            width: 100%;
            height: 100vh;
            object-fit: cover;
        }

        .texto {
            color: white;
            position: absolute;
            top: 40%;
            left: 70%;
            transform: translate(-30%, -5%);
            font-size: 55px;
            font-weight: bold;
            text-shadow: 2px 2px 25px rgb(0, 0, 0);
            z-index: 2;
        }

        .parg {
            background-color: rgba(29, 29, 17, 0.185);
            color: rgb(255, 255, 255);
            position: absolute;
            top: 60%;
            left: 70%;
            transform: translate(-30%);
            font-size: 18px;
            font-weight: bold;
            text-shadow: 2px 2px 50px rgb(0, 0, 0);
            z-index: 2;
            border-style: yellow;
        }

        .support-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color:rgb(37, 78, 211);
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
            background-color: #128C7E;
        }

        .support-button img {
            width: 40px;
            height: 40px;
        }

        a{
            text-decoration: none;
        }
        .table-container {
        position: fixed;
        top: 16%; /* Ajuste a posição vertical */
        left: 2%; /* Ajuste a posição horizontal */
        width: 150px; /* Largura do quadrado */
        height: 20pxpx; /* Altura do quadrado */
        background-color: rgba(255, 255, 255, 0.9); /* Fundo semitransparente */
        border-radius: 10px; /* Bordas arredondadas */
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Sombra para destaque */
        padding: 10px;
        z-index: 10; /* Certifica-se de que fique acima de outros elementos */
    }

    /* Estilização da tabela */
    table {
        width: 100%;
        height: 100%;
        text-align: center;
        border-collapse: collapse;
    }

    table th, table td {
        padding: 5px;
        font-size: 12px;
    }

    form {
        font-size: 12px;
        text-align: center;
    }

    select, button {
        font-size: 12px;
        padding: 5px;
        margin-top: 5px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }
    </style>
</head>
<body>
<header class="menu">
        <div class="logo"> Nutrição Fitness</div>
        <nav>
            <a class="a1" href="#" href="next">Início</a>
            <a class="a1" href="Cadastro.php">Receitas</a>
            <a class="a1" href="duvidasfrequentes.php">Dúvidas frequentes</a>
            <a class="button" href="Cadastro.php">Cadastrar</a>
            <a class="button" href="Entrar.php">Entrar</a>
        </nav>
    </header>
    <img src="img/alimentacao-fit.png">
    <div class="texto">Nutrição Fitness</div>
    <div class="parg">
    Afinal, o termo "fitness" é uma palavra inglesa que significa "estar em boa forma física".
    Opte por alimentos em sua forma mais natural, como frutas, legumes, verduras, grãos integrais 
    e proteínas magras. Esses alimentos fornecem os nutrientes essenciais para o bom funcionamento
    do organismo. O objetivo da nutrição fitness é desconstruir a noção de que refeições saudáveis 
    são sem graça, resultando em um planejamento alimentar saboroso e nutritivo.
    </div>
    
    
</body>
</html>