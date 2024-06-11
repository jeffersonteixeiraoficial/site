<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
</head>
<body>
    <h1>Lista de Usuários</h1>
    
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
        </tr>
        <?php
        // Connect to the database
        $connection = mysqli_connect("localhost", "root", "", "dbusuarios");

        // Check connection
        if (!$connection) {
            die("Falha ao conectar ao MySQL: " . mysqli_connect_error());
        }

        // Fetch and display user data
        $query = "SELECT id, nome, email FROM usuarios";
        $result = mysqli_query($connection, $query);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['nome']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>Nenhum usuário encontrado</td></tr>";
        }

        // Close connection
        mysqli_close($connection);
        ?>
    </table>
</body>
</html>
