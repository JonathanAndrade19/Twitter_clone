<?php

require_once('dbConnect.php');

//query para validação de usuarios
$sqlValidar = " SELECT * FROM usuarios ";

$objDb = new db();
$link = $objDb->conecta_mysql();

$resultado_id =  mysqli_query($link, $sqlValidar);

if($resultado_id){
    $dados_usuarios = array();
    while($linhas =  mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
        $dados_usuarios[] = $linhas;
    }
    
    foreach($dados_usuarios as $usuarios){
       echo $usuarios['usuario'].'<br/>';
    }
    

} else {
    echo 'Erro na execulção da consulta, favor entrar em contato com o admin do siteclea';
}

?>