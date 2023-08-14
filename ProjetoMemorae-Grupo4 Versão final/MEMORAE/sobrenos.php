<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/sobrenos.css">
    <title>Sobre nós-Memorae</title>
    <link rel="icon" type="image/x-icon" href="img/Memoraepngpng.png">
</head>
<body class="back">

  <!-- Cabeçrio da página-->
  <header class="head">

    <!-- Logotipo e logo marca-->
    <img src="img/Memoraepngpng.png" alt="" width="6%" height="6%" class="img">
    <h1 class="text-uppercase title">Memorae</h1>
        
    <!-- Botões referenciados da página -->
    <div class="bnts">
      <a href="index.php"><button type="button" class="btn btn-success fw-bold"> Home </button></a>
      <a href="sobrenos.php"><button type="button" class="btn btn-success fw-bold">Sobre nós</button></a>  
    
      <div class="btn-group">
        <button type="button" class="btn btn-success dropdown-toggle fw-bold" data-bs-toggle="dropdown" aria-expanded="false">
              Cadastrar/Login
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="CADASTRO/cadastro.php">Cadastrar</a></li>
          <li><a class="dropdown-item" href="LOGIN/login.php">Login</a></li>
          <li><a class="dropdown-item" href="login-admin/login.php">Login ADM</a></li>
        </ul>
      </div>
    </div>
  </header>

        <!-- Conteúdo principal da página-->
  <div class="card mb-3 cardcolor" style="max-width: 940px;">
    <img src="img/equipe-sobrenos.jpg" class="card-img-top" alt="..." height="450px">
    <div class="card-body">
      <h5 class="card-title text-light fw-bold">Equipe Memorae - Desenvolvimento de Sistemas, SENAI LUIZ MASSA, Botucatu SP<hr></h5>
      <p class="card-text text-light fw-bold">A equipe adotou a ideia de criar um software web para gerenciar consultas e agilizar esses processos rotineiros dos agentes da saúde.</p>
      <p class="card-text text-light fw-bold">O objetivo do projeto é criar um sistema web onde você não só pode marcar consultas em todas as clínicas parceiras
         como verificar onde ou quando suas consultas vão ocorrer. Tentando agilizar a vida dos agentes da saúde e dos clientes envolvidos com as clínicas
          parceiras do site. </p>
    </div>
  </div>

  <!-- Footer da página-->
  <footer class="fixed-bottom p-1 bg-success text-light" style="height:14%;">
    <div class="d-flex justify-content-around align-items-center">
          
      <!-- Logo tipo-->
      <div class="d-flex flex-column align-items-center" style="width: 100%;">
        <img src="img/Memoraepngpng.png" alt="" width="15%" height="15%" class="img">
      </div>

      <!-- Informações Senai -->
      <div class="d-flex justify-content-center" style="width: 100%;">
        <p> <span class="fw-bold">Escola Senai "Luiz Massa"</span> <br>
        Av Dr. Jaime Almeida Pinto, 1332 <br> Botucatu/SP CEP 18605-318</p>
      </div>

      <!-- Logo Senai -->
      <div class="d-flex justify-content-center" style="width: 100%;">
        <img src="img/logo-senai.png" alt="" width="30%" height="30%" class="img">
      </div>
    </div>

    <!-- Todos os direitos reservados -->
    <div class="d-flex justify-content-around">
      <hr style="width:34%;">
      <p>Todos os direitos reservados - Icaro da Silva Almeida, Leonardo Massacani, Rafael Pauletti</p>
      <hr style="width:34%;">
    </div>
  </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>