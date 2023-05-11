<?php 
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'bloco';

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);


// if($conexao->connect_errno)
// {
//     echo "erro";
// }
// else{
//     echo "conexao efetuada com sucesso";
// }
?>