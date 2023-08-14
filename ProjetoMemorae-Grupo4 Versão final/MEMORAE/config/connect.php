<?php
    //Define padrão de caracteres
    header("Content-type: text/html; charset=utf-8");

        //Puxa as informações pra conexão com o banco de dados
        $host = "localhost";
        $user = "root";
        $password = "root";
        $database = "agenda";

        //Faz a conexão com o banco de dados
        $connect = mysqli_connect($host, $user, $password, $database);

        if(!$connect){
            print("Não foi possivel se conectar com o banco de dados " . mysqli_connect_error());
        };

    mysqli_set_charset($connect, "utf-8");
?>