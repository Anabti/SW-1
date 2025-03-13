<?php

 $nome = $_GET [cxnome];
 $nota1 = $_GET [cxnotaum];
 $nota2 = $_GET [cxnonotadois];
 $nota3 =$_GET [cxnotatres];

 $soma =  ($nota1 + $nota2 + $nota3 )/3;
 echo "A média das suas notas são :";

 $media = ($nota1 + $nota2 + $nota3) / 3

 if ($nota1 > 10) {
    echo "Número valido";
 }else
    echo "Número Invalido";
  
?>
<h1>Nota média:</h1>
<p>Sua nota média foi: <?php echo $media ?></p>   


           
