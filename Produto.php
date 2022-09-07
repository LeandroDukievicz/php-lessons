<?php
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



