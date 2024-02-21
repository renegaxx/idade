<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Votação</title>
</head>
<body>
    <h2>Votação</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <label>Digite sua idade:</label>
        <input type="number" name="idade" required>
        <br><br>
        <input type="submit" value="Verificar Votação">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (!empty($_POST['idade'])) {
            $idade = $_POST['idade'];

            if ($idade >= 16) {
                echo "<h3>Você tem $idade anos e está apto para votar!</h3>";
            } else {
                echo "<h3>Você tem $idade anos. Desculpe, mas você não pode votar, pois é menor de 16 anos.</h3>";
            }
        } else {
            echo "<h3>Por favor, digite sua idade antes de verificar a votação.</h3>";
        }
    }
    ?>
</body>
</html>
