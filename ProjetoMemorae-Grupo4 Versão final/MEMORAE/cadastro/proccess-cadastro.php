<?php
    //Chama a conexão com o banco de dados
    include("../config/connect.php");

    //Cria variaveis e puxa por metodo post os valores 
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $csenha = $_POST['csenha'];
    $senhac;

    //Recupera dados do BD
    $CONSULTAS = "SELECT email FROM usuario WHERE ativo = 1 AND email = '".$email."'";
    $DUSU = mysqli_query($connect, $CONSULTAS);

    if(mysqli_num_rows($DUSU) > 0){
        //Redireciona a pagina para o login
        $retorno = "Já possui um usuário cadastrado com esse email!";
        header("location: cadastro.php?retorno=" . $retorno);
    }else{
        //Confere se as senhas que o usuário inserio são identicas
        if($senha == $csenha){
            //Da o valor para a variável que será inserido no comando SQL
            $senha = $senhac;

            //Cria uma variavel como comando pro SQL
            $SQL = "INSERT INTO usuario (nome, email, senha, ativo) Values('".$nome."', '".$email."', SHA1('".$senhac."'), 1);";

            //Tenta fazer a inserção de um novo usuário nuo banco de dados
            if(mysqli_query($connect, $SQL)){
            //encerra a conexao com o banco de dados
            mysqli_close($connect);

            //Redireciona a pagina para o login
            $retorno = "Usuário cadastrado com sucesso!!!";
            header("Location: ../LOGIN/login.php?retorno=" . $retorno);

        }else{
            //encerra a conexao com o banco de dados
            mysqli_close($connect);

            //Redireciona a pagina para o login
            $retorno = "Não foi possivel cadastrar o usuário!!!";
            header("location: cadastro.php?retorno=" . $retorno);
        };

        }else{
            //Redireciona e envia uma mensagem de falha
            $retorno = "As senhas não conferem";
            header("Location: cadastro.php?retorno=" . $retorno);
        }
    }
?>