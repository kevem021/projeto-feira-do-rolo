<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Controle - Feira do Rolo</title>

    <link rel="stylesheet" hred="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/sweetalert2.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php 
        if (!isset($_session["feiradorolo"]))
            require "../views/index/login.php";

     ?>  
</body>
</html>