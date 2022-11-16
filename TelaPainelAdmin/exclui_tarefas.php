<?php

//1- realizando a conexao com o banco de dados(local,usuario,senha,nomeBanco)

//$con=mysqli_connect("localhost","root","","bd_lavarapido");
include "conexao_beauty.php";

//2- pegar o valor vindo da url
$id = $_POST["idtarefas"];

$comandoSql = "delete from tarefas where id_tarefas = '$id'";
$resultado = mysqli_query($con, $comandoSql);

header("Location: index.php");



//3- criando o comando sql para exclusao do registro


/*4- executando o comando sql
$resultado=mysqli_query($con,$comandoSql);

//5- verificando se o comando sql foi executado
if($resultado==true){
    echo "Excluído com sucesso";
    echo "<a href=lista_funcionario.php> Listar Funcionarios </a>";
}else{
    echo "Erro na exclusão";
}
*/
