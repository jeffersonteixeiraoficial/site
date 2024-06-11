<?php
require_once "connection.php";

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os dados do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];       
    $sql = "INSERT INTO usuarios (`nome`,`email`)
            VALUES ('$nome', '$email')";        

    if ($mysqli->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: "  .$mysqli->error;
    }

    // Fecha a conexão com o MySQL
    $mysqli->close();

    // Redireciona de volta após cinco segundos
    
}
header("refresh: 1; url = index.html");
?>
