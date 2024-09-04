<?php 

    function js($_POST['capital'],$_POST['taxa'],$_POST['tempo']) {
        $capital = $_POST['capital'];
        $taxa = $_POST['taxa'];
        $tempo = $_POST['tempo'];
        $juros = $capital * $juros * $tempo;
        return $juros;
    }

    function composto($_POST['capital'],$_POST['taxa'],$_POST['tempo']){
        $capital = $_POST['capital'];
        $taxa = $_POST['taxa'];
        $tempo = $_POST['tempo'];
        $juros = $capital * (1+$taxa) ** $tempo;
        return $juros;
        
    }


?>