<?php

    require_once('dbConnect.php');

    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $objDb = new db();
    $link = $objDb->conecta_mysql();
    
    //Criando Query de inserção de dados.
    $sqlinsert = " insert into usuarios(usuario, email, senha) values ('$usuario','$email','$senha') ";

    // executar a query
    if(mysqli_query($link, $sqlinsert)){
        echo 'Usuario Registrado com Sucesso!';
    }else{
        echo 'Erro ao registrar o Usuário!';
    }

?>