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
    header("Location: frm_cad_cli_painel.php");
}else
    echo "Erro no cadastro";







?>