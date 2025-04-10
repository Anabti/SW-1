<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 02</title>
</head>
<body>
    <h1>Tabela</h1>

        <form action="exercicio02.php" method="post">
            <p>Digite a quantidade de linhas: <input type="number" name="linhas" id=""></p>
            <p>Digite a quantidade de colunas: <input type="number" name="colunas" id=""></p>
            <input type="submit" value="CRIAR TABELA">
        </form> 

        <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST"){
                $linhas = $_POST["linhas"];
                $colunas = $_POST["colunas"];
                var_dump($linhas);


                echo "<h1> TABELA </h1>";
                echo "<table border='1'>";
        
                echo"<tr>";
                echo"<th></th>";

                $j = 1;
                while ($j <= $colunas){
                echo "<th> Coluna $j </th>";
                $j++;
                }
                echo"</tr>";

        
                $i = 1;
                while ($i <= $linhas){
                   echo "<tr>";
                   echo "<th> Linha $i </th>";

                   $j = 1;
                   while ($j <= $colunas){
                   echo "<td> Linha $i, Coluna $j </td>";
                   $j++;
                   }
                   echo "</tr>";
                   $i++;
                }

            echo "</table>";
          }
        ?>

</body>
</html>