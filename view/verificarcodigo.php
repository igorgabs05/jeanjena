<?php session_start(); ?>
<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Verificar Código</title>
  <link rel="stylesheet" href="verificarcodigo.css">
</head>
<body>
  <div class="container">
    <div class="caixadelogin">
      <h2>Verifique seu Código</h2>

      <?php
        if (isset($_SESSION['msg'])) {
          echo '<div class="mensagem">'.$_SESSION['msg'].'</div>';
          unset($_SESSION['msg']);
        }
      ?>

      <p>Digite o código que enviamos para o seu e-mail:</p>
      <form action="../controller/VerificarCodigoController.php" method="post">
        <input
          type="text"
          name="codigo"
          class="form-control"
          placeholder="insira o codigo de 4 digitos"
          maxlength="4"
          required
        />
        <button class="botao" type="submit">Verificar</button>
      </form>

      <p class="textodesla">
        <a href="recuperarsenha.php">Reenviar código</a> |
        <a href="index.php">Voltar ao Login</a>
      </p>
    </div>
  </div>
</body>
</html>
