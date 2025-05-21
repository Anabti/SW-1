<?php
    include_once 'Produto.class.php';

    $Produto = new Produto ("Perfume",250,1);
    $Produto->adicionarEstoque(10);
    $Produto->removerEstoque(9);
    $Produto->mostrarDetalhes();

    echo "Produto:" . $produto->getNome() . "br";
    echo "Preço:" . $produto->getPreco() . "br";
    echo "Quantidade em estoque:" . $produto->getQuantidade() . "br";

?>