<?php

include "conexao_beauty.php";

$desc = $_POST["tarefas"];
$func = $_POST["functarefa"];

$comandoSql = "insert into tarefas (desc_tarefa, id_funcionario)
values
('$desc', '$func')";

$resultado = mysqli_query($con, $comandoSql);

//verificando se o comando sql foi executado
if ($resultado == true) {
    header("Location: index.php");
} else
    echo "Erro no cadastro";
