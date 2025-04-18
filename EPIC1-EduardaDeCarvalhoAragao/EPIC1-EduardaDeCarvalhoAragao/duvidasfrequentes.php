<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alegreya:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
  <title>Duvidas Frquentes</title>
  <link rel="stylesheet">
</head>
<style>
  body {
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    background-image: url(img/Design\ sem\ nome\ \(4\).png);
    margin: 0;
    background-size: cover; 
    background-repeat: no-repeat; 
    background-position: center; 
    height: 100vh;
  }

  .menu {
    text-align: center;
    height: 70px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: linear-gradient(45deg,rgb(3, 9, 46),rgb(0, 20, 196),rgb(3, 7, 46));
    position: absolute;
    width: 100%;
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
    color:rgba(7, 44, 255, 0.68);
    background-color: rgba(3, 3, 3, 0.5);
  }

  .logo {
    margin-left: 20px;
    font-size: 24px;
    font-weight: bold;
    color: #fff;
    font-family: "Alegreya", serif;
  }

  .button {
    text-decoration: none;
    margin-right: 20px;
    background-color:rgb(8, 66, 224);
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
    background-color:rgb(10, 32, 160);
  }

  .conteiner {
    color: rgb(22, 22, 22);
    width: 920px;
    margin: 0 auto;
    padding: 20px;
    background-color:rgb(88, 121, 151); 
    border-radius: 10px;
  }

  .conteiner h3 {
    color: rgb(20, 19, 19); 
    margin-bottom: 15px;
  }

  .conteiner a {
    color: rgb(26, 25, 25); 
    line-height: 1.8;
    font-size: 18px;
  }

  .text {
    color: #333;
    line-height: 1.6;
    font-size: 18px;
  }
  .support-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color:rgb(37, 63, 211);
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
            background-color:rgb(18, 61, 140);
        }

        .support-button img {
            width: 40px;
            height: 40px;
        }
        </style>

<body>
  <header class="menu">
    <div class="logo">Nutrição Fitness</div>
    <nav>
      <a class="a1" href="Inicio.php">Início</a>
      <a class="a1" href="Receitas.php">Receitas</a>
      <a class="a1" href="#">Dúvidas frequentes</a>
      <a class="a1" href="Index.php">Sair</a>
      
    </nav>
  </header>
  <div class="conteiner">
    <CENTER>
      <br><br><br>
      <h3>DÚVIDAS FREQUENTES:</h3>
      <hr><br><li>
      <a href="https://www.instagram.com/cloverdetox?igsh=MXRqbHZsejcwNzR4Yg==">Onde encontro informações sobre alimentação fitness?</a><br><br></li>
     <li> <a href="https://portal.pucrs.br/noticias/saude/5-dicas-para-cuidar-da-saude-mental-e-emocional-o-ano-todo/">Como está a relação entre seu corpo e mente?</a><br><br></li>
     <li><a href="https://gauchazh.clicrbs.com.br/donna/noticia/2012/08/nutricionista-responde-a-10-perguntas-sobre-dietas-e-habitos-alimentares-cjplluv9701c326cn68z5hy1i.html">Beber água ajuda a emagrecer?</a><br><br></li>
     <li><a href="https://viverbem.unimedbh.com.br/qualidade-de-vida/prato-saudavel/">Como montar um prato saudável?</a><br><br></li>
     <li><a href="">Preciso me cadastrar para acessar aos conteúdo exclusivo?</a><br><br></li>
      <li><a href="">Como contribuir com o blog?</a><br><br></li>
      
    </CENTER>
  </div>
  </body>
</html>