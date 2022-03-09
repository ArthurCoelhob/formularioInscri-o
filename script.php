<?php

$categorias = [];
$categorias[]  = 'infantil';
$categorias[]  = 'adolescente';
$categorias[]  = 'adulto';
$categorias[]  = 'idoso';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if ($idade >= 6 && $idade <= 12) {
    echo "O nadador " .$nome. " compete na categoria " . $categorias[0];
} elseif ($idade >= 13 && $idade <= 18) {
    echo "O nadador ".$nome. " compete na categoria " . $categorias[1];
} else {
    echo "O nadador " .$nome. " compete na categoria " . $categorias[2];
}

?>