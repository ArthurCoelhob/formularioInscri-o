<?php

$categorias = [];
$categorias[]  = 'infantil';
$categorias[]  = 'adolescente';
$categorias[]  = 'adulto';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome)) {
    echo 'O campo nome precisa ser preenchido';
    return;
}

if(strlen($nome) < 3) {
    echo 'O campo nome precisa conter mais de 3 caracteres';
    return;
}

if(strlen($nome) > 40) {
    echo 'O campo nome é muito extenso';
    return;
}

if(!is_numeric($idade)) {
    echo 'Informe um numero para o campo idade';
    return;
}

if ($idade >= 6 && $idade <= 12) {
    echo "O nadador " .$nome. " compete na categoria " . $categorias[0];
} elseif ($idade >= 13 && $idade <= 18) {
    echo "O nadador ".$nome. " compete na categoria " . $categorias[1];
} else {
    echo "O nadador " .$nome. " compete na categoria " . $categorias[2];
}

?>