<?php
    //Chama o arquivo que verifica sessão de usuário
    include("../../config/user-session.php");

    //chama a conexão com o banco de dados
    include("../../config/connect.php");

    //Recebe o id da consulta
    $idcon = $_POST["idcon"];
    $opcao = $_POST["alterar"];
    
    if($opcao == "excluir"){
        //Comando SQL que será executado na consulta
        $SQL = "UPDATE consulta SET ativo = 0 WHERE id = $idcon AND id_usuario = $id";
        //Faz a consulta entra as variaveis de conexão e o código SQL
        if(mysqli_query($connect, $SQL)){
            //Fecha a conexão com o banco de dados
            mysqli_close($connect);
            //Envia mensagem de retorno
            $retorno = "Consulta deletada com sucesso";
            header("Location: ../home-session.php?retorno=" . $retorno);
    }else{
          //Fecha a conexão com o banco de dados
          mysqli_close($connect);
          //Envia mensagem de retorno
          $retorno = "Não foi possivel deletar a consulta";
          header("Location: ../home-session.php?retorno=" . $retorno);  
        }
    }else{
        //Redirecionamento
        $idcon = $idcon;
        header("Location: reagendar.php?idcon=" . $idcon);
    }
?>