<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostra dados</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">Loja</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="mostra.php">Mostrar Produtos</a>
            </li>
        
        </ul>
    </div>
</nav>
    <div class="container mt-5">
        <h2>Dados dos Produtos</h2>
        <?php
        // conexao
        $servidor = 'localhost';
        $banco = 'loja';
        $usuario = 'root';
        $senha = '';

        $conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);

        $codigoSQL = "SELECT * FROM `produto`";

        try {
            $comando = $conexao->prepare($codigoSQL);
            $resultado = $comando->execute();

            if ($resultado) {
                echo "<div class='list-group mb-4'>";
                while ($linha = $comando->fetch()) {
                    echo "<div class='list-group-item'>";
                    echo "<h5 class='mb-1'>Nome: " . htmlspecialchars($linha['nome']) . "</h5>";
                    echo "<p>Descrição: " . htmlspecialchars($linha['descricao']) . "</p>";
                    echo "<p>Preço: R$ " . htmlspecialchars($linha['preco']) . "</p>";
                    echo "<p>URL: <a href='" . htmlspecialchars($linha['url']) . "' target='_blank'>" . htmlspecialchars($linha['url']) . "</a></p>";
                    $id = $linha['id'];
                    echo "<a href='deleta.php?id=$id' class='btn btn-danger'>Apagar Elemento</a>";
                    echo "</div>";
                }
                echo "</div>";
            } else {
                echo "<div class='alert alert-danger'>Erro ao executar o comando!</div>";
            }
        } catch (Exception $e) {
            echo "<div class='alert alert-danger'>Erro: " . htmlspecialchars($e->getMessage()) . "</div>";
        }

        $conexao = null;
        ?>
        
        <form action="deleta.php" class="mt-4">
            <h4>Apagar Produto</h4>
            <p>Informe o ID do item que deseja apagar:</p>
            <div class="form-group">
                <label for="id">ID:</label>
                <input type="text" class="form-control" name="id" required>
            </div>
            <button type="submit" class="btn btn-danger">Apagar</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
