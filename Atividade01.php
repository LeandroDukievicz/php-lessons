<?php
// require_once ('Cliente.php');
// include ('Produto.php');
//INCLUSAO SOMENTE SE FOSSE PRA TRABALHAR COM MAIS CLASSES OU PROJETO REAL.
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

$cliente = new Cliente($Cod_CLiente, $nome, $cpf, $endereco, $telefone, $email);
$cliente->Cod_CLiente = "01";
$cliente->nome = "Leandro Dukievicz";
$cliente->cpf = 123456789101;
$cliente->endereco = "Avenida Guedner";
$cliente->telefone = "99999-1234";
$cliente->email = "ldukie@icloud.com";

echo "--------------------------------------------------------------- <br>";

var_dump($cliente);

echo "<br>---------------------------------------------------------------<br>";


class Produto
{
    public $cod_Prod, $descricao, $Vlr_Custo, $Vlr_Venda, $Qtd_Estoque;



    function __construct($cod_Prod, $descricao, $Vlr_Custo, $Vlr_Venda, $Qtd_Estoque)
    {
        $this->cod_Prod = $cod_Prod;
        $this->descricao = $descricao;
        $this->Vlr_Custo = $Vlr_Custo;
        $this->Vlr_Venda = $Vlr_Venda;
        $this->Qtd_Estoque = $Qtd_Estoque;
        }
}


$produto = new Produto($cod_Prod, $descricao, $Vlr_Custo, $Vlr_Venda, $Qtd_Estoque);
$produto->cod_Prod = 01;
$produto->descricao = "MacBook-M2";
$produto->Vlr_Custo = 3399.37;
$produto->Vlr_Venda = 9799.99;
$produto->Qtd_Estoque = 500;

echo "--------------------------------------------------------------- <br>";

var_dump($produto);

echo "<br>---------------------------------------------------------------<br>";




echo "<h3> LEANDRO DUKIEVICZ RA21144207-5</h3>";

echo "<a href=http://github.com/LeandroDukievicz/php-lessons- target=_blank>GIT REPO   </a>"

?>
