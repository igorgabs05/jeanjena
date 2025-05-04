<?php
session_start();
require_once '../service/conexao.php';

if (!empty($_POST['codigo'])) {
    $codigoDigitado = trim($_POST['codigo']);

    if (!isset($_SESSION['id_usuario_recuperacao'])) {
        $_SESSION['msg'] = "Sessão expirada. Por favor, tente recuperar a senha novamente.";
        header("Location: ../view/recuperarsenha.php");
        exit();
    }

    
    $IDusuario = $_SESSION['id_usuario_recuperacao'];

    $pdo = new UsePDO();
    $conexao = $pdo->getInstance();

    $stmt = $conexao->prepare("SELECT * FROM codigo WHERE codigo = ? AND usuario = ?");
    $stmt->execute([$codigoDigitado, $IDusuario]);

    if ($stmt->rowCount() > 0) {
        $_SESSION['codigo_verificado'] = true; 
        $_SESSION['msg'] = "Código verificado com sucesso!";
        header("Location: ../view/novasenha.php");
        exit();
    } else {
        $_SESSION['msg'] = "Código inválido. Tente novamente.";
        header("Location: ../view/verificarcodigo.php");
        exit();
    }
} else {
    $_SESSION['msg'] = "Digite o código.";
    header("Location: ../view/verificarcodigo.php");
    exit();
}
