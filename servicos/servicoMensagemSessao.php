<?php

session_start();

function inserirMensagemErro(string $mensagem) : void {
    $_SESSION['mensagem-de-erro'] = $mensagem;
}

function obterMensagemErro() : ?string { // esse metodo pode ser retornado uma string ou pode ser retornado null
   if(isset($_SESSION['mensagem-de-erro'])) {
    return $_SESSION['mensagem-de-erro'];
   }

   return null;
}

function removerMensagemErro() : void {
    if(isset($_SESSION['mensagem-de-erro'])) { 
        unset($_SESSION['mensagem-de-erro']);
       }
 }

function inserirMensagemSucesso(string $mensagem) : void {
    $_SESSION['mensagem-de-sucesso'] = $mensagem;
}

function obterMensagemSucesso() : ?string { // esse metodo pode ser retornado uma string ou pode ser retornado null
    if(isset($_SESSION['mensagem-de-sucesso'])) {
     return $_SESSION['mensagem-de-sucesso'];
    }
 
    return null;
 }

 function removerMensagemSucesso() : void {
    if(isset($_SESSION['mensagem-de-sucesso'])) {
        unset($_SESSION['mensagem-de-sucesso']);
       }
}