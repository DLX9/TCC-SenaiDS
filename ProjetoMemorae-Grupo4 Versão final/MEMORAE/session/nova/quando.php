<?php
    //Chama o arquivo que verifica sessão de usuário
    include("../../config/user-session.php");

    //chama a conexão com o banco de dados
    include("../../config/connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="nova.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Memorae</title>
    <link rel="icon" type="image/x-icon" href="../../img/Memoraepngpng.png">
</head>
<body class="back">
    
    <!-- Cabeçrio da página-->
    <header class="head">
        
        <!-- Logotipo e logo marca-->
        <img src="../../img/Memoraepngpng.png" alt="" width="6%" height="6%" class="img">
        <h1 class="text-uppercase title">Memorae</h1>
        
        <!-- Botões referenciados da página -->
        <div class="bnts">
            <a href="../home-session.php"><button type="button" class="btn btn-success fw-bold"> Home </button></a>
            <a href="../lista/lista.php"><button type="button" class="btn btn-success fw-bold"> Consultas </button></a>
            <a href="nova.php"><button type="button" class="btn btn-success fw-bold">Agendar</button></a>
            
        <div class="btn-group">
            <button type="button" class="btn btn-success dropdown-toggle fw-bold" data-bs-toggle="dropdown" aria-expanded="false">
                <?php print($n_usu); ?>
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="../perfil/perfil.php">Editar</a></li>
              <li><a class="dropdown-item" href="../../config/sair.php">Sair</a></li>
            </ul>
          </div>
        </div>
    </header>

    <!-- Conteúdo principal da página-->
    <center>
    <h2 class="text-uppercase top">Nova Consulta</h2>
    <form action="agendar.php" method="post" class="main">

        <?php
        $clinica = $_POST["clinica"];
        $medico = $_POST["medico"];

        $DCL = "SELECT nome FROM clinica WHERE id = $clinica";
        $consultacl = mysqli_query($connect, $DCL);
        $NCL = mysqli_fetch_array($consultacl);

        $DMD = "SELECT nome FROM medico WHERE id = $medico";
        $consultamd = mysqli_query($connect, $DMD);
        $NMD = mysqli_fetch_array($consultamd);
        ?>
        <!--Exibe o nome da clinica -->
        <label for="clinican" class="col-1">Clinica:</label>
        <input type="text" name="clinican" id="clinican" class="col-5" value="<?php print($NCL["nome"]); ?>" readonly>
        <!--Input hidden que carrega o valor da variavel-->
        <input type="text" name="clinica" id="clinica" class="col-5" value="<?php print($clinica); ?>" hidden>
        <br>
        
        <!--Exibe o nome do doutor  -->
        <label for="doutor" class="col-1">Doutor:</label>
        <input type="text" name="medicon" id="medicon" class="col-5" value="<?php print($NMD["nome"]); ?>" readonly>
        <!--Input hidden que carrega o valor da variavel-->
        <input type="text" name="medico" id="medico" class="col-5" value="<?php print($medico); ?>" hidden>
        <br>

        <div class="qnd">
        <label for="hora" class="col-1">Hora:</label>
        <input type="time" name="hora" id="hora" step="2" class="col-2">

        <label for="data" class="col-1">Data:</label>
        <input type="date" name="data" id="data" class="col-2">
        </div>

        <p class="fw-bold">Marque dias e horarios atuais</p>

        <a href="agendar.php"><button type="submit" class="btn btn-success fw-bold">Agendar</button></a>
        </form>
        <br>

        <a href="../home-session.php"><button type="button" class="btn btn-danger">Cancelar</button></a>
        </center>
    
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