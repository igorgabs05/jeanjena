<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Recuperar Senha</title>
    <link rel="stylesheet" href="recupersenha.css">
</head>
<body>
    <div class="container">
        <div class="caixadelogin">
            <h2>Recuperar Senha</h2>
            <p>Por favor, insira seu email abaixo.</p>
            
            <form action="#" method="post">
                <input type="email" class="form-control" placeholder="Email" name="email" required />
                <button class="botao" type="submit">Enviar código</button>
            </form>

            <p>Insira o código que foi enviado para seu email:</p>

            <form action="" method="post">
                <input type="text" class="form-control" placeholder="Código de Recuperação" name="codigo" required />
                <button class="botao" type="submit">Confirmar Código</button>
            </form>

            <p class="textodesla"><a href="../jeanjena/index.php">Voltar ao Login</a></p>
        </div>
    </div>
</body>
</html>
