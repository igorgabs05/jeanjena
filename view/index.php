<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="caixadelogin">
            <h2>Login</h2>
            <p>Por favor, insira seu email ou nome e senha.</p>
            <form action="#" method="post">
                <input type="text" class="form-control" placeholder="Email ou nome" name="usuario" required>
                <input type="password" class="form-control" placeholder="Senha" name="senha" required>
                <button class="botao" type="submit">Entrar</button>
            </form>
            <p class="textodesla">Você não tem uma conta? <a href="../jeanjena/cadastro.php" style="color: #fff;">Cadastrar-se</a></p>
            <p class="textodesla"><a href="recupersenha.php" style="color: #fff;">Esqueceu sua senha?</a></p>
        </div>
    </div>
</body>
</html>
