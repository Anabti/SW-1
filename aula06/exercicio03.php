<?php
     $produtos = [
        ["categoria" => "maquiagem",
        "nome" => "Rimel",
        "preco" => "25.00"
    ],
    
    [
        "categoria" => "vestuario",
        "nome" => "vestido",
        "preco" => "200.00"
    ],
    [
        "categoria" => "perfume",
        "nome" => "Oboticario",
        "preco" => "180.00"
    ],
    [
        "categoria" => "Acessorios",
        "nome" => "colar",
        "preco" => "120"
    ],
    [
        "categoria" => "material-escolar",
        "nome" => "estojo",
        "preco" => "80.00"
    ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 03</title>
    <style>
        table, td, th {
            border: 1px solid black;
            width: 30%;
        }

        .cabecalho{
            background-color:rgb(241, 185, 185);
        }

        .maquiagem{
            background-color: #a6026c;
        }

        .vestuario{
            background-color: #d1024e;
        }

        .perfume{
            background-color:	#a51a41;
        }

        .acessorio{
            background-color: #7d1a0c;
        }

        .material-escolar{
            background-color: #f96153;
        }

    </style>
</head>
<body>
    <h1>TABELA DE PRODUTOS</h1>

    <table>
        <tr>
            <th class= 'cabecalho'>Nome</th>
            <th class= 'cabecalho'>Categoria</th>
            <th class= 'cabecalho'>Preço</th>
        </tr>

        <?php foreach ($produtos as $tabela): 
            $classecategoria = ($tabela["categoria"]);
            ?>
            <tr class="<?= $classecategoria?>">
                <td ><?= $tabela ["nome"] ?></td>
                <td ><?= $tabela ["categoria"] ?></td>
                <td ><?= number_format ($tabela ["preco"], 2, ',', '.') ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
        
        