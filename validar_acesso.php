<?php

require_once('dbConnect.php');

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

//query para validação de usuarios
$sqlValidar = " SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha' ";

$objDb = new db();
$link = $objDb->conecta_mysql();

$resultado_id =  mysqli_query($link, $sqlValidar);

if($resultado_id){
    $dados_usuarios =  mysqli_fetch_array($resultado_id);
    //Validando Usuário
    if(isset($dados_usuarios['usuario'])){
        echo 'Bem vindo ao Sistema: '.$dados_usuarios['usuario'];
    }else{
        header('location: index.php?erro=1');
    }

} else {
    echo 'Erro na execulção da consulta, favor entrar em contato com o admin do siteclea';
}


?>