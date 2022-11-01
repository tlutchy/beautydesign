<?php

include "conexao_beauty.php";

$nome=$_POST["nome"];
$cpf=$_POST["cpf"];
$fone=$_POST["fone"];
$senha=$_POST["senha"];

$comandoSql = "insert into funcionario (nome_funcionario, cpf_funcionario, fone_funcionario, senha)
values
('$nome', '$cpf', '$fone', '$senha')";

$resultado=mysqli_query($con, $comandoSql);

//verificando se o comando sql foi executado
if($resultado==true){
    echo "Cadastrado com sucesso!";
    echo "<br><a href=index.html>Voltar</a>";
    echo "<br><a href=lista_funcionario_beauty.php>Listagem de funcionário</a>";
    //echo "<br><a href=lista_funcionario_beauty_tabela.php>Listagem de funcionário em Tabela</a>";
}else
    echo "Erro no cadastro";







?>