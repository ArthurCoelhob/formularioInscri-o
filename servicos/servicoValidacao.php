<?php 

function validaNome(string $nome) : bool {
    if(empty($nome)) {
        inserirMensagemErro('O nome não pode ser vazio');
        return false;
    }
    
    else if(strlen($nome) < 3) {
        inserirMensagemErro('O campo nome precisa conter mais de 3 caracteres');
        return false;
    }
    
    else if(strlen($nome) > 40) {
        inserirMensagemErro('O campo nome é muito extenso');
        return false;
    }
    return true;
}

function validaIdade(string $idade) : bool {
    if(!is_numeric($idade)) {
        inserirMensagemErro('Informe um numero para o campo idade');
        return false;
    }
    return true;
}


