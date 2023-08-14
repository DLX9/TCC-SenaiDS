<?php 
    //Chama o arquivo que verifica sessão de usuário
    include("../../config/user-session.php");

    //chama a conexão com o banco de dados
    include("../../config/connect.php");

    //Puxa valor para variavies por metodo post
    $clinica = $_POST['clinica'];
    $medico = $_POST['medico'];
    $idcon = $_POST["consulta"];
    $dia = $_POST['data'];
    $hora = $_POST['hora'];

    $SQL = "UPDATE consulta SET dia = '".$dia."', horario = '".$hora."' WHERE id = $idcon";
    //Coleta informações do banco de dados
    $CONSULTAS = "SELECT id_medico, dia, horario FROM consulta WHERE ativo = 1 AND  id_medico = $medico AND ativo = 1 AND dia = '".$dia."' AND horario = '".$hora."'";
    $DCON = mysqli_query($connect, $CONSULTAS);

    if(mysqli_num_rows($DCON) > 0){
        //Fecha conexão com o bd
        mysqli_close($connect);
        //Mensagem de retorno e direcionamento
        $retorno = "O médico não está disponivel nesse horario";
        header("location: lista.php?retorno=" .$retorno);
    }else{
        //Condição para conexão com o banco de dados
    if(mysqli_query($connect, $SQL)){
        //Fecha a conexão com o BD
        mysqli_close($connect);
        //Mensagem de sucesso e redirecionamento
        $retorno = "Consulta atualizada com sucesso";
        header("location: ../home-session.php?retorno=" . $retorno);
    }
    }
?>