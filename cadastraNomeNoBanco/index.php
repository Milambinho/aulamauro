<?php
$dsn = "mysql:host=localhost;dbname=aula06"; 
$user = "root"; 
$password = ""; 
try {
    $conexao = new PDO($dsn, $user, $password);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = $_POST['nome'];

        
        $stmt = $conexao->prepare("INSERT INTO usuarios (nome) VALUES (:nome)");
        $stmt->bindParam(':nome', $nome);

   
        if ($stmt->execute()) {
            echo "Usuário $nome adicionado com sucesso!";
        } else {
            echo "Erro ao adicionar usuário.";
        }
    }
} catch (PDOException $excecao) {
    echo "Erro de conexão: " . $excecao->getMessage();
}
?>
