<?php
require '../service/conexao.php';

function register($fullname, $email, $senha) {
    $conn = new usePDO;
    $instance = $conn->getInstance();

    $hashed_password = password_hash($senha, PASSWORD_DEFAULT);

    // Inserindo na tabela usuario
    $sql = "INSERT INTO usuario(email, senha) VALUES (?, ?)";
    $stmt = $instance->prepare($sql);
    $stmt->execute([$email, $hashed_password]);

    $idusuario = $instance->lastInsertId();

    // Inserindo na tabela pessoa
    $sql = "INSERT INTO pessoa(nome, IDusuario, email) VALUES (?, ?, ?)";
    $stmt = $instance->prepare($sql);
    $stmt->execute([$fullname, $idusuario, $email]);

    return $idusuario;
}
