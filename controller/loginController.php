<?php
session_start();
require '../model/LoginModel.php';
require '../service/funcoes.php';

if ($_POST) {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $result = login($usuario, $senha);

    if ($result) {
        $_SESSION['msg'] = "Login realizado com sucesso!";
        $_SESSION['usuario'] = $result['nome'];
        header('Location: ../view/home.php'); 
        exit();
    } else {
        $_SESSION['msg'] = "Usuário ou senha incorretos.";
        header('Location: ../view/index.php'); 
        exit();
    }
}
?>
