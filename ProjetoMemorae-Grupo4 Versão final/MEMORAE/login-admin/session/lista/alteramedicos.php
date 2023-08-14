<?php
    //Chama o arquivo que verifica sessão de usuário
    include("../config/user-session.php");

    //chama a conexão com o banco de dados
    include("../config/connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="alterar.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Memorae</title>
    <link rel="icon" type="image/x-icon" href="../../../img/Memoraepngpng.png">
</head>
<body class="back">
  
  <!-- Cabeçrio da página-->
  <header class="head">

    <!-- Logotipo e logo marca-->
    <img src="../../../img/Memoraepngpng.png" alt="" width="6%" height="6%" class="img"></img>
    <h1 class="text-uppercase title">Memorae</h1>

    <!-- Cabeçrio da página-->
    <div class="bnts">
    <a href="../home-session.php"><button type="button" class="btn btn-success fw-bold"> Home </button></a>
    <a href="../consultas/lista.php"><button type="button" class="btn btn-success fw-bold"> Consultas </button></a>
    <a href="lista.php"><button type="button" class="btn btn-success fw-bold"> Médicos </button></a>
    <a href="../nova/nova.php"><button type="button" class="btn btn-success fw-bold"> Cadastrar Médicos </button></a>
    
      <div class="btn-group">
          <button type="button" class="btn btn-success dropdown-toggle fw-bold" data-bs-toggle="dropdown" aria-expanded="false">
            <?php print("ADM"); ?>
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../perfil/perfil.php">Editar</a></li>
            <li><a class="dropdown-item" href="../../config/sair.php">Sair</a></li>
          </ul>
        </div>
      </div>   
  </header>
    
    <!-- Mensagem de retorno -->
    <?php
        //Recupera a variavel retorno
        $retorno = $_GET['retorno'];

        $idmd = $_GET['idmd'];

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
    <center>
    <h2 class="text-uppercase top">Alterando...</h2>
    <form action="proccess-atualizar.php" method="post" class="main">

    <!-- Carrega o id do medico -->
    <input name="idmd" type="hidden" value="<?php print($idmd); ?>">

        <!--atualiza o nome do doutor -->
        <label for="nome" class="col-2">Nome:</label>
        <input type="text" name="nome" id="nome" class="col-6" value="">
        <br>

        <!--atualiza a especialização do doutor  -->
        <label for="especializacao" class="col-2">Especialização: </label>
        <input type="text" name="especializacao" id="especializacao" class="col-6" value="">
        <br>

        <button type="submit" class="btn btn-success fw-bold">Alterar</button>
        </form>
        <br>

        <a href="../home-session.php"><button type="button" class="btn btn-danger">Cancelar</button></a>
        </center>

  <hr class="embaixo">

  <!-- Footer da página-->
  <footer class="fixed-bottom p-1 bg-success text-light" style="height:14%;">
    <div class="d-flex justify-content-around align-items-center">

      <!-- Logo tipo-->
      <div class="d-flex flex-column align-items-center" style="width: 100%;">
        <img src="../../../img/Memoraepngpng.png" alt="" width="15%" height="15%" class="img">
      </div>

      <!-- Informações Senai -->
      <div class="d-flex justify-content-center" style="width: 100%;">
          <p> <span class="fw-bold">Escola Senai "Luiz Massa"</span> <br>
          Av Dr. Jaime Almeida Pinto, 1332 <br> Botucatu/SP CEP 18605-318</p>
      </div>

      <!-- Logo Senai -->
      <div class="d-flex justify-content-center" style="width: 100%;">
        <img src="../../../img/logo-senai.png" alt="" width="30%" height="30%" class="img">
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