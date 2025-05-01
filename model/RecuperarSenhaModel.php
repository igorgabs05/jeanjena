<?php
require_once '../service/conexao.php';

class RecuperarSenhaModel
{
    private $conexao;

    function __construct()
    {
        $pdo = new UsePDO();
        $this->conexao = $pdo->getInstance();
    }

    function buscarIDusuarioPorEmail($email)
    {
        $stmt = $this->conexao->prepare("SELECT IDusuario FROM `pessoa` WHERE email = ?");
        $stmt->execute([$email]);
    
        if ($stmt->rowCount() > 0) {
            $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
            return $resultado;
        }
    }
    


    function salvarCodigo($IDusuario, $codigo)
    {
        $stmt = $this->conexao->prepare("DELETE FROM codigo WHERE usuario = ?");
        $stmt->execute([$IDusuario]);

       
        $stmt = $this->conexao->prepare("INSERT INTO codigo (usuario, codigo) VALUES (?, ?)");
        $stmt->execute([$IDusuario, $codigo]);
    }
}
?>
