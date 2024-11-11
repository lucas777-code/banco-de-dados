<?php
include 'conexao.php'; // Inclui o arquivo de conexão

if (isset($_GET['id'])) { // Verifica se o ID foi passado
    $id = $_GET['id']; // Recebe o ID
    $sql = "SELECT * FROM Neymar WHERE id=$id"; // Consulta o usuário
    $result = $conn->query($sql); // Executa a consulta
    $Neymar = $result->fetch_assoc(); // Obtém os dados do usuário
}

// Se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $times = $_POST['times']; // Recebe o novo nome
    $titulos = $_POST['titulos']; // Recebe o novo email
    $sql = "UPDATE Neymar SET times='$times', titulos='$titulos' WHERE id=$id"; // Prepara a atualização

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Redireciona se a atualização for bem-sucedida
    } else {
        echo "Erro: " . $conn->error; // Mostra erro, se houver
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Atualizar Neymar</title>
</head>
<body>
    <h1>Atualizar Neymar</h1>
    <form action="" method="POST">
        <label>times:</label>
        <input type="times" name="times" value="<?php echo $Neymar['times']; ?>" required>
        <label>Titulos:</label>
        <input type="titulos" name="titulos" value="<?php echo $Neymar['titulos']; ?>" required>
        <input type="submit" value="Atualizar">
    </form>
    <a href="index.php">Cancelar</a> <!-- Link para voltar -->
</body>
</html>