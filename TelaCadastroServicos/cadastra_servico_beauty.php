<?php

include "conexao_beauty.php";

$nome=$_POST["nome"];
$valor=$_POST["valor"];

$comandoSql = "insert into servico (nome_servico, valor)
values
('$nome', '$valor')";

$resultado=mysqli_query($con, $comandoSql);

//verificando se o comando sql foi executado
if($resultado==true){
    echo "Cadastrado com sucesso!";
    echo "<br><a href=frm_cadastra_servico.html>Voltar</a>";
    echo "<br><a href=lista_servico_beauty.php>Listagem de Serviços</a>";
    //echo "<br><a href=lista_funcionario_beauty_tabela.php>Listagem de funcionário em Tabela</a>";
}else
    echo "Erro no cadastro";







?>