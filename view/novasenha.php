<?php session_start(); ?>
<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <title>Nova Senha</title>
  <link rel="stylesheet" href="styl.css"> 
</head>
<body>
  <div class="container">
    <div class="caixadelogin">
      <h2>Nova Senha</h2>

      <?php
        if (isset($_SESSION['msg'])) {
          echo '<div class="mensagem">'.$_SESSION['msg'].'</div>';
          unset($_SESSION['msg']);
        }
      ?>

      <form action="../controller/NovaSenhaController.php" method="post">
        <input type="password" name="senha1" placeholder="Digite a nova senha" required>
        <input type="password" name="senha2" placeholder="Repita a nova senha" required>
        <button type="submit">Alterar Senha</button>
      </form>

      <p><a href="index.php">Voltar ao login</a></p>
    </div>
  </div>
</body>
</html>
