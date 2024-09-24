<?php
try {
    $numero1 = 10;
    $numero2 = 0;
    $resultado = $numero1 / $numero2;
    echo "O resultado da divisão é: " . $resultado;
} catch (Exception $excecao) {
    echo "Erro na divisão: " . $divisaoErrada->getMessage();
} catch (DivisionByZeroError $divisaoErrada) {
    echo "Erro: " . $excecao->getMessage();
} 