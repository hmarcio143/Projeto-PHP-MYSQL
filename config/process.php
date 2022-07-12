<?php
    session_start();
    include_once("connection.php");
    include_once("url.php");


    $data = $_POST;

    //SELEÇÃO DE DADOS
    if(!empty($data)){
    //MODIFICAÇÃO NO BANCO
    //criar contato
    if($data['type'] === "create"){

        print_r($data);

        $name = $data['name'];
        $phone = $data['phone'];
        $obs= $data['observation'];

        $query = "INSERT INTO contacts(name,phone,observation)VALUES(:name, :phone, :observation)";
        $stmp = $conn->prepare($query);
        $stmp->bindParam(":name",$name);
        $stmp->bindParam(":phone", $phone);
        $stmp->bindParam(":observation", $obs);

        try{
            $stmp->execute();
            $_SESSION['msg'] = "Contato criado com sucesso";
    
        }catch(PDOException $e){    
            $error = $e->getMessage();
            echo "Erro: ". $error;
        }

    }
    /////Até aqui
    else if($data['type'] == "edit"){
        $name = $data['name'];
        $phone = $data['phone'];
        $obs= $data['observation'];
        $id= $data['id'];


        $query = "UPDATE contacts SET name=:name, phone=:phone, observation=:observation WHERE id = :id";
        $stmp = $conn->prepare($query);
        $stmp->bindParam(":name",$name);
        $stmp->bindParam(":phone", $phone);
        $stmp->bindParam(":observation", $obs);
        $stmp->bindParam(":id", $id);

        try{
            $stmp->execute();
            $_SESSION['msg'] = "Contato editado com sucesso";
    
        }catch(PDOException $e){    
            $error = $e->getMessage();
            echo "Erro: ". $error;
        }

    }else if($data['type'] === 'delete'){

        $id = $data['id'];
        $query = "DELETE FROM contacts WHERE id=:id";
        $stmp = $conn->prepare($query);
        $stmp->bindParam(":id",$id);

        try{
            $stmp->execute();
            $_SESSION['msg'] = "Contato deletado com sucesso";
    
        }catch(PDOException $e){    
            $error = $e->getMessage();
            echo "Erro: ". $error;
        }

    }

    //Levar para a home
    header("location:".$BASE_URL."../index.php");


    }else{

        $id;

        if(!empty($_GET)){
    
        $id = $_GET['id'];
        }
    
    
        if(!empty($_GET)){
            $query = "SELECT * FROM contacts WHERE id = :id";
            $stmp = $conn->prepare($query);
            $stmp->bindParam(":id", $id);
            $stmp->execute();
            $contact = $stmp->fetch();
    
        }else{
    
        //retorna todos os contatos
        $contact = [];
    
        $query = "SELECT * FROM contacts";
    
        $stmp = $conn->prepare($query);
        $stmp->execute();
        $contact = $stmp->fetchAll(); 
        }
    


    }

    //Fechar conexão

    $conn = null;

   


?>