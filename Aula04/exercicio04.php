<?php
    $nome = $_REQUEST["csnome"];
    $email = $_REQUEST["csemail"];
    $data = $_REQUEST["csdata"];
    $cartao = $_REQUEST["cscartao"];

    echo"Olá $nome! 
    <br> 
    E-mail cadastrado: $email 
    <br> Seu aniversário cadastrado: $data 
    <br>  
    A bandeira de seu cartão cadastrada: $cartao";
?>