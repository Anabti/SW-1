<?php
    require 'conexao.php';

    $titulo = "O pequeno principe";
    $genero = " aventura";
    $ano = "1999";
    $autor = "Fred";
    $paginas = "150";
    $preco = 199.99;

    $sql = "INSERT INTO livro (titulo,genero,ano,autor,paginas,preco) VALUES (:titulo,:genero,:ano,:autor,:paginas,:preco)";
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':titulo', $titulo);
    $stmt->bindParam(':genero', $genero);
    $stmt->bindParam(':ano', $ano);
    $stmt->bindParam(':autor', $autor);
    $stmt->bindParam(':paginas', $paginas);
    $stmt->bindParam(':preco', $preco);


    if ($stmt->execute()) {
        echo "livro inserido com sucesso!";
    }
    
    else {
        echo "Erro ao inserir po livro.";
    }

?>