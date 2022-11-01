<?php

include "conexao_beauty.php";

$nome=$_POST["nome"];
$cpf=$_POST["cpf"];
$fone=$_POST["fone"];
$obs=$_POST["obs"];

$comandoSql = "insert into cliente (nome_cliente, cpf_cliente, fone_cliente, obs_cliente)
values
('$nome', '$cpf', '$fone', '$obs')";

$resultado=mysqli_query($con, $comandoSql);

//verificando se o comando sql foi executado
if($resultado==true){
    echo "Cadastrado com sucesso!";
    echo "<br><a href=frm_cadastra_cliente.html>Voltar</a>";
    echo "<br><a href=lista_cliente_beauty.php>Listagem de Clientes</a>";
    //echo "<br><a href=lista_funcionario_beauty_tabela.php>Listagem de funcionário em Tabela</a>";
}else
    echo "Erro no cadastro";







?>