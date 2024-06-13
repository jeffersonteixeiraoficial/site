<?php
require_once "connection.php";

$sql = "SELECT * FROM dbusuarios";
$result = $mysqli->query($sql);

// Verifica se houve algum erro na consulta
if (!$result) {
    die("Erro ao buscar usuários: " . $mysqli->error);
}

$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de usuários</title>
    
</head>
<body>
<div class="container">
    <h2>Lista de usuários</h2>
    <button onclick="window.location.href='index.html'">Voltar ao cadastro</button>
    <div id="users-list">
        <?php
        if ($result->num_rows > 0) {
            echo "<form action='atualizar_usuarios.php' method='POST'>";
            echo "<table>";
            echo "<tr><th>ID</th><th>Nome</th><th>Email</th><th>Atualizar</th><th>Deletar</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['nome'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td><input type='submit' value='Atualizar' name='id' value='" . $row['id'] . "'></td>";
                echo "<td><input type='submit' value='Deletar' value='" . $row['id'] . "'></td>";
                echo "</tr>";
            }
            echo "</table>";
            
            echo "</form>";
        } else {
            echo "<p>Nenhum usuário encontrado.</p>";
        }
        ?>
    </div>
</div>
</body>                                                                                           




<?php
require_once "connection.php"; // Este arquivo deve conter as informações de conexão com o banco de dados
if(isset($_POST['id'])) {
    $id  = $_POST['id'];
    $sql = "SELECT * FROM usuarios WHERE id = $id";

    $result = $mysqli->query($sql);

    $row = $result->fetch_assoc();
    $nome = $row['nome'];
    $email = $row['email'];
    
}

?>
    <!-- ESSA PARTE É DO CSS. COMENÇANDO NA LINHA -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        h1 {
            text-align: center;
            margin-top: 50px;
        }

        form {
            width: 300px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        button {
            width: 300px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
   </html>


