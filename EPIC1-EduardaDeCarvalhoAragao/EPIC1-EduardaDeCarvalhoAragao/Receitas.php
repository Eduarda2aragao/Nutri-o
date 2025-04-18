<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Nutrição Fitness - Receitas</title>
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Alegreya:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
  <style>
    body {
      background-image: url('img/Design sem nome (4).png');
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      font-family: 'Alegreya', serif;
      color: #333;
    }
    /* Navbar customizada */
    .navbar {
      background: linear-gradient(45deg, rgb(3, 11, 46), rgb(0, 69, 196), rgb(3, 17, 46));
    }
    .navbar-brand,
    .nav-link {
      color: #fff !important;
      text-transform: uppercase;
      font-weight: bold;
    }
    .nav-link:hover {
      background-color: rgba(104, 101, 101, 0.5);
      border-radius: 20px;
    }
    /* Estilo dos cards */
    .card {
      margin-bottom: 30px;
      border: none;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    }
    .card-img-top {
      object-fit: cover;
      height: 200px;
    }
    footer {
      background-color: #f8f9fa;
      padding: 20px 0;
      text-align: center;
      margin-top: 30px;
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="#">Nutrição Fitness</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Alternar navegação">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="inicio.php">Início</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Receitas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="duvidasfrequentes.php">Dúvidas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">Sair</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Imagem de topo -->
  <div class="container mt-4">
    <div class="row">
      <div class="col-12">
        <img src="img/img1.jpg" class="img-fluid rounded" alt="Imagem de destaque">
      </div>
    </div>
  </div>

  <!-- Seção de Receitas -->
  <div class="container mt-5">
    <div class="row">
      <!-- Card 1: Arroz Integral Colorido -->
      <div class="col-md-4">
        <div class="card">
          <img src="img/arroz_colorido (2).jpeg" class="card-img-top" alt="Arroz Integral Colorido">
          <div class="card-body">
            <h5 class="card-title">Arroz Integral Colorido</h5>
            <p class="card-text">
              <strong>Ingredientes:</strong>
              <ul>
                <li>50g de arroz integral</li>
                <li>150g de carne desfiada</li>
                <li>1 fio de azeite</li>
                <li>Cenoura, cebola e alho a gosto</li>
                <li>Gengibre a gosto</li>
                <li>3 xícaras de água</li>
                <li>Sal a gosto</li>
                <li>Hortelã para decorar</li>
              </ul>
            </p>
            <a href="https://www.youtube.com/watch?v=eLy0ogosdV0" class="btn btn-primary">Modo de Preparo</a>
          </div>
        </div>
      </div>

      <!-- Card 2: Crepioca -->
      <div class="col-md-4">
        <div class="card">
          <img src="img/crepioca.jpeg" class="card-img-top" alt="Crepioca">
          <div class="card-body">
            <h5 class="card-title">Crepioca</h5>
            <p class="card-text">
              <strong>Ingredientes:</strong>
              <ul>
                <li>2 ovos</li>
                <li>1 colher de sopa de farinha de linhaça</li>
                <li>Queijo ralado a gosto</li>
                <li>Orégano e pitada de sal</li>
                <li>Sal e pimenta a gosto</li>
              </ul>
            </p>
            <a href="https://www.youtube.com/watch?v=UZEwDBk6T_0" class="btn btn-primary">Modo de Preparo</a>
          </div>
        </div>
      </div>

      <!-- Card 3: Filé de Peixe Assado -->
      <div class="col-md-4">
        <div class="card">
          <img src="img/peixe.jpg" class="card-img-top" alt="Filé de Peixe Assado">
          <div class="card-body">
            <h5 class="card-title">Filé de Peixe Assado</h5>
            <p class="card-text">
              <strong>Ingredientes:</strong>
              <ul>
                <li>150g de filé de peixe</li>
                <li>2 batatas grandes em rodelas</li>
                <li>1/2 pimentão</li>
                <li>1 cebola média picada</li>
                <li>1 dente de alho espremido</li>
                <li>Coentro e cheiro verde a gosto</li>
                <li>Sal e pimenta a gosto</li>
              </ul>
            </p>
            <a href="https://www.youtube.com/watch?v=K0E6xL08qxE" class="btn btn-primary">Modo de Preparo</a>
          </div>
        </div>
      </div>

      <!-- Card 4: Bolo de Caneca -->
      <div class="col-md-4">
        <div class="card">
          <img src="img/bolo_caneca.jpg" class="card-img-top" alt="Bolo de Caneca">
          <div class="card-body">
            <h5 class="card-title">Bolo de Caneca</h5>
            <p class="card-text">
              <strong>Ingredientes:</strong>
              <ul>
                <li>15g de óleo de coco</li>
                <li>1 ovo</li>
                <li>Canela e cacau a gosto</li>
                <li>Adoçante a gosto</li>
                <li>1 pitada de fermento</li>
                <li>1 pitada de sal</li>
              </ul>
            </p>
            <a href="https://www.youtube.com/watch?v=0HDC2BrgvL8" class="btn btn-primary">Modo de Preparo</a>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Footer -->
  <footer>
    <div class="container">
      <p>&copy; 2025 Nutrição Fitness. Todos os direitos reservados.</p>
    </div>
  </footer>

  <!-- Bootstrap 5 JS e Popper.js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>