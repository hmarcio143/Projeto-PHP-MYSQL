<?php
    include_once('./config/url.php');
    include_once('./config/connection.php');
    include_once('./config/process.php');

    //limpar mensagem

    if(isset($_SESSION['msg'])){
        $printMsg = $_SESSION['msg'];
        $_SESSION['msg'] = "";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?=$BASE_URL?>/css/style.css">
    <title>Agenda de contatos</title>
</head>
<body>
    <header>

    <nav>
        <a href="<?=$BASE_URL?>index.php">Agenda</a>
        <a href="<?=$BASE_URL?>create.php">Adicionar contato</a>
    </nav>

</header>