<?php
    //Chama o arquivo que verifica sessão de usuário
    include("../config/user-session.php");

    //chama a conexão com o banco de dados
    include("../config/connect.php");

    //Recebe os valores do medico
    $idmd = $_POST["idmd"];
    $nome = $_POST["nome"];
    $especializacao = $_POST["especializacao"];
    
    $SQL = "UPDATE medico SET nome = '".$nome."', especializacao = '".$especializacao."' WHERE id = $idmd";
    //Faz a consulta entra as variaveis de conexão e o código SQL
    if(mysqli_query($connect, $SQL)){
        //Fecha a conexão com o banco de dados
        mysqli_close($connect);
        //Envia mensagem de retorno
        $retorno = "Medico atualizado com sucesso!";
        header("Location: ../home-session.php?retorno=" . $retorno);
    }else{
        //Fecha a conexão com o banco de dados
        mysqli_close($connect);
        //Envia mensagem de retorno
        $retorno = "Não foi possivel deletar o medico";
        header("Location: ../home-session.php?retorno=" . $retorno);
    }
?>