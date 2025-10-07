<?php
    session_start();
    include_once 'conexao.php';

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $consulta = "SELECT * FROM usuario WHERE email = :email AND senha = :senha";

    $stmt = $pdo->prepare($consulta);

    //Vincula os parâmetros
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);

    //executa a consulta
    $stmt->execute();

    //Obtém o número de registros encontrados
    $num_registros = $stmt->rowCount();

    //Obtém o resultado
    $resultado = $stmt->fetchall(PDO::FETCH_ASSOC);

    //exibe o número de registros encontardos no banco
    var_dump($resultado);

    if($num_registros == 0){
        //echo "Você não tem permissão";
        header('Location: restrita.php');
    }else{
        $_SESSION['id'] = $resultado ['id'];
        $_SESSION['nome'] = $resultado ['nome'];
        $_SESSION['email'] = $resultado ['email'];
        header('Location: restrita.php');
        //echo"Acesso pemitido para restrita.php";


        echo "Acesso permitido para a restrita.php";
    }
?>        