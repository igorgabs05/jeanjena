<?php
require '../service/conexao.php';
require '../service/funcoes.php';

function login($usuario, $senha) {
    $conn = new usePDO;
    $instance = $conn->getInstance();

  
    $sql = "SELECT u.idusuario, u.email, u.senha, p.nome 
            FROM usuario u
            INNER JOIN pessoa p ON u.idusuario = p.idusuario
            WHERE u.email = ? LIMIT 1";

    $stmt = $instance->prepare($sql);

 
    $stmt->execute([$usuario]);
    
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($senha, $user['senha'])) {
        return $user; 
    }

    return false; 
}
?>
