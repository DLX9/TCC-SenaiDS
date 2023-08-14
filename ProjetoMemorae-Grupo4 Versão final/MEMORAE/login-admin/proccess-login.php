<?php 
    //Chama a conexão com o banco de dados
    include("../config/connect.php");

    //Recupera dasdos do login
    $email = $_POST['email'];
    $senha = SHA1($_POST['senha']);

    //Seleciona a senha do banco de dados referente ao email
    $SQL = "SELECT id, senha FROM adiministrador WHERE email = '$email';";
    $consulta = mysqli_query($connect, $SQL);

    //Verifica a consulta
    if($consulta){
        //Recebe os dados consultados no banco de dados
        $linha = mysqli_fetch_assoc($consulta);
        $senhaBD = $linha["senha"];
        //print($senha . " sim ");
        //print($senhaBD);
        if($senha = $senhaBD){
            //Fecha a conexão com o banco de dados
            mysqli_close($connect);

            session_start();

            //Caso a sessão não exista inicia a sessão
            if(!isset($_SESSION)){

                //Caso ela não exista ela começa
                session_start();
            };

            //Guarda o email do usuário em uma variavel de sessão
            $_SESSION['aemail'] = $email;
            //Redireciona para a sessão de usuário
            $retorno = "Bem vindo, " . $email;
            header("location: session/home-session.php?retorno=" . $retorno);
        }else{

            //Fecha conexão com o BD
            mysqli_close($connect);
            //Mensagem de retorno de falha
            $retorno = "Suas informações não conferem";
            header("location: login.php?retorno=" .$retorno);
    } 
    }else{
        //Fecha conexão com o BD
        mysqli_close($connect);
        //Mensagem de retorno de falha
        $retorno = "Suas informações não conferem";
        header("location: login.php?retorno=" .$retorno);
    }
?>