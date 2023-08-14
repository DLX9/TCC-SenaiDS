<?php 
    //Chama o arquivo que verifica sessão de usuário
    include("../../config/user-session.php");

    //chama a conexão com o banco de dados
    include("../../config/connect.php");

    //Puxa valor para variavies por metodo post
    $clinica = $_POST['clinica'];
    $medico = $_POST['medico'];
    $dia = $_POST['data'];
    $hora = $_POST['hora'];

    $SQL = "INSERT INTO consulta (id_usuario, id_clinica, id_medico, dia, horario, ativo) Values('".$id."', '".$clinica."', '".$medico."', '".$dia."', '".$hora."', 1)";
    //Coleta informações do banco de dados
    $CONSULTAS = "SELECT id_medico, dia, horario FROM consulta WHERE ativo = 1 AND  id_medico = $medico AND dia = '".$dia."' AND horario = '".$hora."'";
    $DCON = mysqli_query($connect, $CONSULTAS);

    if(mysqli_num_rows($DCON) > 0){
        //Fecha conexão com o bd
        mysqli_close($connect);
        //Mensagem de retorno e direcionamento
        $retorno = "Não foi possivel agendar essa consulta";
        header("location: nova.php?retorno=" .$retorno);
    }else{
        //Condição para conexão com o banco de dados
    if(mysqli_query($connect, $SQL)){
        //Fecha a conexão com o BD
        mysqli_close($connect);
        //Mensagem de sucesso e redirecionamento
        $retorno = "Consulta agendada com sucesso";
        header("location: ../home-session.php?retorno=" . $retorno);
    }
    }
?>