<?php
require_once "connection.php";


     if (isset($_GET['id'])) {
        $id = $_GET['id'];
    
     }      else {
        echo "<p>Nenhum usuário encontrado.</p>";
     }
     $sql = "SELECT * FROM usuarios WHERE id ='$id'";
     $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
       while ($row = $result->fetch_assoc()) {
       
   
   

    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Usuários</title>
    <link rel="stylesheet" href="att.css">
</head>

<body>
    <div class="container">
        <h2>Atualizar Usuário</h2>
        <form action="atualizar_usuarios.php" method="post">
            <input type="hidden" name="id" value="<?php echo ''.$row ['id']; ?>">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="<?php echo ['nome']; ?>">; ?>">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo ['email']; ?>">; ?>">
            <button type="submit">Atualizar</button>
        </form>
        <button class="back-button" onclick="window.location.href='exibir.php'">Voltar à Lista</button>
    </div>
</body>

</html>
<?php
}
 } 
$mysqli->close();


?>