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

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/jquery.inputmask.min.js"></script>
    <script src="js/jquery.maskedinput-1.2.1.js"></script>
    <script src="js/parsley.min.js"></script>
    <script src="js/sweetalert2.js"></script>
    <script>
    //mostrar senha
    mostrarSenha = function() {
            const campo = document.getElementById('senha');
            if (campo.type === 'password') {
                campo.type = 'text';
            } else {
                campo.type = 'password';
            }
        } 


        //mensagem de erro 
        message = function(msg, url, icone) {
            Swal.fire({
                icon: icone,
                title: msg,
                confirmButtonText: "OK",
            }).then((result) => {
                location.href = url;
            });
        }


    </script>        
</head>
<body>
    <?php 
        if ((!isset($_session["feiradorolo"])) && (!$_POST)) {
            require "../views/index/login.php";
        } else if ((!isset($_SESSION["feiradorolo"])) && ($_POST)) {
            $email = trim($_POST["email"] ?? NULL);
            $senha = trim($_POST["senha"] ?? NULL); 

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "<script>mensagem(' E-mail inválido','index','error');</script>";
            } else if (empty($senha)) {
                echo "<script>mensagem(' Digite a senha','index','error');</script>";
            } else {
                
            }

        } else {

        }

     ?>  
</body>
</html>