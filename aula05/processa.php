<?php
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $nome = "Aluno";

if ($_POST['email'] == 'aluno@gmail.com' && $_POST['senha'] == '1234') {
    $_SESSION['logado'] = true;
    ////Segue para a PAGINA privada.php
    header("Location: privada.php");
} else {
    //Segue para a PAGINA erro.php
    header("Location: erro.php");
}
?>