<?php

function defineCategoriaCompetidor(string $nome, string $idade) : ?string
{
    $categorias = [];
    $categorias[]  = 'infantil';
    $categorias[]  = 'adolescente';
    $categorias[]  = 'adulto';
    if(validaNome($nome) && validaIdade($idade))
    {
        removerMensagemErro();
        if ($idade >= 6 && $idade <= 12) {
            for($i = 0; $i <= count($categorias); $i++)
            if($categorias[$i] == 'infantil') {
                inserirMensagemSucesso("O nadador ".$nome. " compete na categoria " .$categorias[0]);
             return null;
            }
         
         } else if ($idade >= 13 && $idade <= 18) {  
             for($i = 0; $i <= count($categorias); $i++)
            if($categorias[$i] == 'adolescente') {
                inserirMensagemSucesso("O nadador ".$nome. " compete na categoria " .$categorias[1]);
             return null;
            }
         } else {
             for($i = 0; $i <= count($categorias); $i++)
             if($categorias[$i] == 'adulto') {
                inserirMensagemSucesso("O nadador ".$nome. " compete na categoria " .$categorias[2]);
             return null;
            }
         }
    }
    removerMensagemSucesso();
    return obterMensagemErro();
}