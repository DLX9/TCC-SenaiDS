<?php 
    //chama a conexão com o banco de dados
    include("connect.php");

    //Vareifica se a sessão de usuário existe
    if(!isset($_SESSION)){

        //Caso não exista inicia sessão usuário
        session_start();

        //Verifica se o usuário fez o login
        if(!isset($_SESSION["aemail"])){

            //Caso não tenha feito login, redireciona para a tela de login
            header("location: ../../login/login.php");
        }else{
            $email = $_SESSION['aemail'];

            //Seleciona a senha do banco de dados referente ao email
            $SQL = "SELECT id, id_clinica, email, senha FROM adiministrador WHERE email = '$email';";
            $consulta = mysqli_query($connect, $SQL);
    
            //Recebe os dados consultados no banco de dados
            $linha = mysqli_fetch_assoc($consulta);
            $id = $linha["id"];
            $n_usu = "ADM";
            $idcli = $linha["id_clinica"];
        }
    }
?>