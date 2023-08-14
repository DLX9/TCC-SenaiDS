<?php
    //Chama o arquivo que verifica sessão de usuário
    include("../config/user-session.php");

    //chama a conexão com o banco de dados
    include("../config/connect.php");

    //Recebe o id da clinica
    $idcli = $_POST["idcli"];
    $idmd = $_POST["idmd"];
    $opcao = $_POST["alterar"];
    
    if($opcao == "excluir"){
        //Comando SQL que será executado na consulta
        $SQL = "UPDATE medico SET ativo = 0 WHERE id = $idmd";
        //Faz a consulta entra as variaveis de conexão e o código SQL
        if(mysqli_query($connect, $SQL)){
            //Fecha a conexão com o banco de dados
            mysqli_close($connect);
            //Envia mensagem de retorno
            $retorno = "Medico deletado com sucesso!";
            header("Location: medicos.php?retorno=" . $retorno . "&idcli=" . $idcli);
    }else{
          //Fecha a conexão com o banco de dados
          mysqli_close($connect);
          //Envia mensagem de retorno
          $retorno = "Não foi possivel deletar o medico";
          header("Location: ../home-session.php?retorno=" . $retorno);

        }
    }else{
        //Redirecionamento
        header("Location: alteramedicos.php?idmd=" . $idmd);
    }
?>