<?php

class Cliente 
{
    public $Cod_CLiente, $nome, $cpf, $endereco, $telefone, $email;  
    

    
    function __construct($Cod_CLiente, $nome, $cpf, $endereco, $telefone, $email)
    {
        $this->Cod_CLiente = $Cod_CLiente;
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->endereco = $endereco;
        $this->telefone = $telefone;
        $this->email = $email;  
    }

}







