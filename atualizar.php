
<?php
require_once "connection.php"; // Este arquivo deve conter as informações de conexão com o banco de dados


if(isset($_GET['id'])) {
    $id  = $_GET['id'];
    $sql = "SELECT * FROM usuarios WHERE id = $id";

    $result = $mysqli->query($sql);

    $row = $result->fetch_assoc();
    $nome = $row['nome'];
    $email = $row['email'];
    
}
 ?>






<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>faça sua correção</title>

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
     
<body>
    <h1>Atualizar Usuário</h1>
    <form action="dado.php" method="POST">
    <input type="text" id="nome" name="id" value= "<?php echo htmlspecialchars($id);?>"required><br><br>
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" value= "<?php echo htmlspecialchars($nome); ?>"required><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>"  required><br><br>
        
        <input type="submit" value="Atualizar">
        <button onclick="window.history.back()">Voltar</button>
    </form>
</div>
    
</div>
</body>
</html>
