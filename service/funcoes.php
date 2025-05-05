<?php

if (!function_exists('buscarEmails')) {
    function buscarEmails($conexao) {
        $emails = array();
        $sql = "SELECT * FROM code";
        $resultado = $conexao->query($sql);
        
        if ($resultado && $resultado->num_rows > 0) {
            while ($row = $resultado->fetch_assoc()) {
                $emails[] = $row;
            }
        }
        
        return $emails;
    }
}

// Função para buscar um email específico pelo ID
if (!function_exists('buscarEmailPorId')) {
    function buscarEmailPorId($conexao, $id) {
        $sql = "SELECT * FROM code WHERE id = ?";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $resultado = $stmt->get_result();
        
        if ($resultado && $resultado->num_rows > 0) {
            return $resultado->fetch_assoc();
        }
        
        return null;
    }
}

// Função para marcar um email como lido
if (!function_exists('marcarComoLido')) {
    function marcarComoLido($conexao, $id) {
        $sql = "UPDATE code SET lido = 1 WHERE id = ?";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}

// Função para formatar a data
if (!function_exists('formatarData')) {
    function formatarData($data) {
        $timestamp = strtotime($data);
        return date('d/m/Y', $timestamp);
    }
}
?>
