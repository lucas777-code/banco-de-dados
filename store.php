<?php

include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") { // Verifica se o formulário foi enviado
    $times = $_POST['times']; // Recebe o nome
    $titulos = $_POST['titulos']; // Recebe o email
    $sql = "INSERT INTO Neymar (times, titulos) VALUES ('$times', '$titulos')"; // Prepara a consulta

    // Executa a consulta e verifica se foi bem-sucedida
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Redireciona para a página principal
    } else {
        echo "Erro: " . $conn->error; // Mostra erro, se houver
    }
}

?>