<?php 

    //Chama a conexão com o banco de dados
    include("../config/connect.php");

    include("../../config/user-session.php");

    //Cria variaveis e puxa por metodo post os valores 
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $csenha = $_POST['csenha'];
    $senhac;

    //Confere se as senhas são iguais
    if($senha == $csenha){
        $senhac = SHA1($senha);

     //Cria uma variavel como comando pro SQL
    $SQL = "UPDATE usuario SET nome='".$nome."', email='".$email."', senha='".$senhac."' WHERE id = $id";

    //Tenta fazer a inserção de um novo usuário nuo banco de dados
    if(mysqli_query($connect, $SQL)){
        //encerra a conexao com o banco de dados
        mysqli_close($connect);

    //Retorna mensagem de sucesso
    $retorno = "Usuário Atualizado com sucesso  !!!";
    header("Location: ../home-session.php?retorno=" . $retorno);

    }else{
        //encerra a conexao com o banco de dados
        mysqli_close($connect);

        //Retorna mensagem de falha
        $retorno = "Não foi possivel cadastrar o usuário!!!";
        //header("location: perfil.php?retorno=" . $retorno);
        print("$SQL");
    };

    }else{
        //Retorna mensagem de falha
        $retorno = "As senhas não conferem";
        //header("Location: perfil.php?retorno=" . $retorno);
        print("OIII");
    }

    
?>