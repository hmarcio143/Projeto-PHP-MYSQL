<?php 

    $host = "localhost";
    $db = "agenda";
    $user = "root";
    $pwd = "";


    try{
        
        $conn = new PDO("mysql: host=$host;dbname=$db", $user, $pwd);

        //erro na conexão
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }catch(PDOException $e){

        $error = $e->getMessage();
        echo "Erro: ". $error;
    }

?>