<?php
require '../model/CadastroModel.php';
require '../service/funcoes.php';

session_start();

if ($_POST) {
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $ConfirmPassword = $_POST['confirmPassword'];

    if ($password !== $ConfirmPassword) {
        $_SESSION['msg'] = "As senhas não coincidem.";
        header("Location: ../view/cadastro.php");
        exit;
    }

    $result = register($fullName, $email, $password);

    if ($result) {
        $_SESSION['msg'] = "Cadastro realizado com sucesso!";
    } else {
        $_SESSION['msg'] = "Este e-mail já está cadastrado.";
    }

    header("Location: ../view/cadastro.php");
    exit;
}
