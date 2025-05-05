<?php
require_once '../service/conexao.php';

class CadastroModel {
    private $conn;

   function __construct() {
        $this->conn = new usePDO;
    }

    function registerUser($fullname, $email, $senha) {
        $instance = $this->conn->getInstance();

        $sql = "SELECT IDusuario FROM usuario WHERE email = ?";
        $stmt = $instance->prepare($sql);
        $stmt->execute([$email]);

        if ($stmt->rowCount() > 0) {
            return false;
        }

        $hashed_password = password_hash($senha, PASSWORD_DEFAULT);

        $sql = "INSERT INTO usuario(email, senha) VALUES (?, ?)";
        $stmt = $instance->prepare($sql);
        $stmt->execute([$email, $hashed_password]);

        $idusuario = $instance->lastInsertId();

        $sql = "INSERT INTO pessoa(nome, IDusuario) VALUES (?, ?)";
        $stmt = $instance->prepare($sql);
        $stmt->execute([$fullname, $idusuario]);

        return $idusuario;
    }
}
?>