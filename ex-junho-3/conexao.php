<?php 

$servidor = 'localhost';
$user = 'root';
$password = '';
$banco = 'univel3';


$conexao = mysqli_connect($servidor, $user, $password, $banco);

if(!$conexao){
    echo 'houve um erro na conexão';
}

?>