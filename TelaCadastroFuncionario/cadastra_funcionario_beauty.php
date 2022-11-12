<?php

include "conexao_beauty.php";

$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$fone = $_POST["fone"];
$senha = $_POST["senha"];

$comandoSql = "insert into funcionario (nome_funcionario, cpf_funcionario, fone_funcionario, senha)
values
('$nome', '$cpf', '$fone', '$senha')";

$resultado = mysqli_query($con, $comandoSql);

//verificando se o comando sql foi executado
if ($resultado == true) {
    header("Location: frm_cad_func_painel.php");
} else
    echo "Erro no cadastro";
