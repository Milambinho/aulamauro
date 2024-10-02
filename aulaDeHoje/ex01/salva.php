<?php

// conexao
$servidor = 'localhost';
$banco = 'receitas';
$usuario = 'root';
$senha = '';

$conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);

echo "Conectado!<br>";

echo "Recebido: <br>";
echo $_GET['nome'];
echo "<br>";
echo $_GET['quantidade'];
$num = 0;
if((strpos($_GET['quantidade'], ','))===false){
    $num = $_GET['quantidade'];
} else {
    $num = str_replace(',','.',$_GET['quantidade']);
}


$codigoSQL = "INSERT INTO `ingredientes` (`id`, `nome`, `qtd`) VALUES (NULL, :nm, :qtd)";

try {
    $comando = $conexao->prepare($codigoSQL);

    $resultado = $comando->execute(array('nm' => $_GET['nome'], 'qtd' => $num));

    if($resultado) {
	echo "Comando executado!";
    } else {
	echo "Erro ao executar o comando!";
    }
} catch (Exception $e) {
    echo "Erro $e";
}

$conexao = null;

?>