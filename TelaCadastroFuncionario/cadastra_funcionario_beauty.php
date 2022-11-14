<?php

include "conexao_beauty.php";

$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$fone = $_POST["fone"];
$senha = $_POST["senha"];
if(isset($_POST["admin"]))
    $admin=1;
else
    $admin=0;

$comandoSql = "insert into funcionario (nome_funcionario, cpf_funcionario, fone_funcionario, senha, admin)
values
('$nome', '$cpf', '$fone', '$senha', '$admin')";

$resultado = mysqli_query($con, $comandoSql);

//verificando se o comando sql foi executado
if ($resultado == true) {
    header("Location: frm_cad_func_painel.php");
} else
    echo "Erro no cadastro";
