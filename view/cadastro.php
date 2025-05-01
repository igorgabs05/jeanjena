<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link rel="stylesheet" href="cadastro.css">
</head>
<body>
    <div class="container">
        <div class="caixadelogin">
            <h2>Cadastro</h2>
            <p>Por favor, preencha os campos abaixo.</p>
            <?php
session_start();
if (isset($_SESSION['msg'])) {
    echo "<p style='color:yellow;'>" . $_SESSION['msg'] . "</p>";
    unset($_SESSION['msg']);
}
?>
            <form action="../controller/CadastroController.php" method="post">
                <input type="name" class="input" placeholder="Nome" name="fullName" required>
                <input type="email" class="input" placeholder="Email" name="email" required>
                <input type="password" class="input" placeholder="Senha" name="password" required>
                <input type="password" class="input" placeholder="Confirme sua Senha" name="confirmPassword" required>
                <button type="submit" class="botao">Cadastrar</button>
            </form>
            <p class="textodesla">Já tem uma conta? 
                <a href="index.php" style="color: #fff;">Login</a>
            </p>
        </div>
    </div>
</body>
</html>


