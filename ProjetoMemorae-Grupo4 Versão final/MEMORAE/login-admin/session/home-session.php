<?php
    //Chama o arquivo que verifica sessão de usuário
    include("/config/user-session.php");
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="home.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Memorae</title>
    <link rel="icon" type="image/x-icon" href="../img/Memoraepngpng.png">
</head>
<body class="back">

    <!-- Cabeçrio da página-->
    <header class="head">

        <!-- Logotipo e logo marca-->
        <img src="../../img/Memoraepngpng.png" alt="" width="6%" height="6%" class="img">
        <h1 class="text-uppercase title">Memorae</h1>

        <!-- Botões referenciados da página -->
        <div class="bnts">
        <a href="home-session.php"><button type="button" class="btn btn-success fw-bold"> Home </button></a>
        <a href="consultas/lista.php"><button type="button" class="btn btn-success fw-bold"> Consultas </button></a>
        <a href="lista/medicos.php"><button type="button" class="btn btn-success fw-bold"> Médicos </button></a>
        <a href="nova/nova.php"><button type="button" class="btn btn-success fw-bold"> Cadastrar Médicos </button></a>
        
        <div class="btn-group">
            <button type="button" class="btn btn-success dropdown-toggle fw-bold" data-bs-toggle="dropdown" aria-expanded="false">
            <?php print("ADM"); ?>
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="config/sair.php">Sair</a></li>
            </ul>
          </div>
        </div>
        
    </header>

    <!-- Mensagem de retorno -->
    <?php
        //Recupera a variavel retorno
        $retorno = $_GET['retorno'];

        //Verifica se a variavel possui valor 
        if(isset($retorno)){
            //Apresenta na tela a mensagem de retorno
            print('
            <div class="container justfy-content-center mt-5">
                <div class="alert alert-success text-center" role="alert">
                    <h4>' . $retorno . '</h4>
                </div>
            </div>
            ');
    }
    ?>

    <!-- Conteúdo principal da página-->
    <div class="text-center marg">
        <h2 class="text-danger"> Seja bem vindo administrador,</h2>
        <h3>Atualize médicos e consultórios</h3>
     </div>
       
    <!-- Footer da página-->
    <footer class="fixed-bottom p-1 bg-success text-light" style="height:14%;">
        <div class="d-flex justify-content-around align-items-center">
            
            <!-- Logo tipo-->
            <div class="d-flex flex-column align-items-center" style="width: 100%;">
            <img src="../../img/Memoraepngpng.png" alt="" width="15%" height="15%" class="img">
            </div>
            
            <!-- Informações Senai -->
            <div class="d-flex justify-content-center" style="width: 100%;">
                <p> <span class="fw-bold">Escola Senai "Luiz Massa"</span> <br>
                Av Dr. Jaime Almeida Pinto, 1332 <br> Botucatu/SP CEP 18605-318</p>
            </div>
            
             <!-- Logo Senai -->
            <div class="d-flex justify-content-center" style="width: 100%;">
            <img src="../../img/logo-senai.png" alt="" width="30%" height="30%" class="img">
            </div>
        </div>
        
        <!-- Todos os direitos reservados -->
        <div class="d-flex justify-content-around">
            <hr style="width:34%;">
            <p>Todos os direitos reservados - Icaro da Silva Almeida, Leonardo Massacani, Rafael Pauletti</p>
            <hr style="width:34%;">
        </div>
    </footer>

  <!-- Link de referência ao JS do Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>