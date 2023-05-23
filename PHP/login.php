<?php 

include("conection.php"); 

// verifica se o email e a senha foram preenchidos
if(isset($_POST['login']) || isset($_POST['senha'])){
    if(strlen($_POST['email']) == 0) {
        echo "Preencha o seu email";
    } elseif (strlen($_POST['senha']) == 0) {
        echo "Preencha a sua senha";
    } else {

        // Limpa a variável POST enquanto manda seus valores para outra
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM user_adm WHERE email = '$email' LIMIT 1";
        $sql_query = $mysqli->query($sql_code) or die("Falha ao executar o SQL: " . $mysqli->error);

        // Recebe o resultado da consulta
        $usuario = $sql_query->fetch_assoc();

        if ($senha === $usuario['senha']) {
            if (!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['email'] = $usuario['email'];

            header('Location:../Paginas/first.php');
        } else {
            echo "Falha ao logar! E-mail ou senha incorretos!";
        }
    }
}

?>