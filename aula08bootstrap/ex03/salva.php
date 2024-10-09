<?php
// conexao
$servidor = 'localhost';
$banco = 'loja';
$usuario = 'root';
$senha = '';

$conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebido - Produto</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Conexão Estabelecida</h2>
        <p class="text-success">Conectado ao banco de dados!</p>

        <h4>Dados Recebidos:</h4>
        <ul class="list-group mb-4">
            <li class="list-group-item"><strong>Nome:</strong> <?php echo htmlspecialchars($_GET['nome']); ?></li>
            <li class="list-group-item"><strong>Descrição:</strong> <?php echo htmlspecialchars($_GET['descricao']); ?></li>
            <li class="list-group-item"><strong>Preço:</strong> <?php echo htmlspecialchars($_GET['preco']); ?></li>
            <li class="list-group-item"><strong>URL da Imagem:</strong> <?php echo htmlspecialchars($_GET['url']); ?></li>
        </ul>

        <?php
        $codigoSQL = "INSERT INTO `produto` (`id`, `nome`, `descricao`, `preco`, `url` ) VALUES (NULL, :nm, :dc, :pc, :ul)";

        try {
            $comando = $conexao->prepare($codigoSQL);
            $resultado = $comando->execute(array('nm' => $_GET['nome'], 'dc' => $_GET['descricao'],'pc' => $_GET['preco'],'ul' => $_GET['url']));

            if($resultado) {
                echo '<div class="alert alert-success">Comando executado com sucesso!</div>';
            } else {
                echo '<div class="alert alert-danger">Erro ao executar o comando!</div>';
            }
        } catch (Exception $e) {
            echo '<div class="alert alert-danger">Erro: ' . htmlspecialchars($e->getMessage()) . '</div>';
        }

        $conexao = null;
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
