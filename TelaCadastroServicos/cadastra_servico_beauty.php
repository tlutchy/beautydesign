<?php

include "conexao_beauty.php";

$nome = $_POST["nome"];
$valor = $_POST["valor"];

$comandoSql = "insert into servico (nome_servico, valor)
values
('$nome', '$valor')";

$resultado = mysqli_query($con, $comandoSql);

//verificando se o comando sql foi executado
if ($resultado == true) {
    header("Location: frm_cad_serv_painel.php");
} else
    echo "Erro no cadastro";
