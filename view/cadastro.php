<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="caixadelogin">
            <h2>Cadastro</h2>
            <p>Por favor, preencha os campos abaixo.</p>
            <form  action=" ../controller/CadastroController.php" method="POST">
                <input type="text" class="form-label" placeholder="Nome" name="nome" required />
                <input type="text" name ="Fullname" class="form-label" placeholder="Email" name="email" required />
                <input type="password" class="form-control" placeholder="Senha" name="senha" required />
                <input type="password" class="form-control" placeholder="Confirme sua Senha" name="confirmarsenha" required />
                <button class="botao" type="submit">Cadastrar</button>
            </form>
            <p class="textodesla">Já tem uma conta? 
                <a href="../jeanjena/index.php" style="color: #fff;">Login</a></p>
        </div>
    </div>
</body>
</html>     
