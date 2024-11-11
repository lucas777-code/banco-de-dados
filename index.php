<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco de Dados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Neymar</h1>
    <form action="store.php" method="POST">
        <label>times:</label>
        <input type="text" name="times" required>
        <label>Titulos:</label>
        <input type="text" name="titulos" required>
        <input type="submit" value="Adicionar pesquisa do jogador">
    </form>
    <hr>
    <h2>Lista de Usuários</h2>
    <div>
        <?php include 'read.php'; ?> <!-- Inclui a lista de usários-->
    </div>
    <div class="container">
    </div>
  </div>
</body>
</html>
</body>
</html>