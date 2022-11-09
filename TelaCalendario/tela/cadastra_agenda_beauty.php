<?php

include "conexao_beauty.php";
include "script.js";

$comandoSql2 = "select * from agenda
as A inner join cliente as C on
a.id_cliente = c.id_cliente inner join
servico as s on s.id_servico = a.id_servico";
$resultado2 = mysqli_query($con, $comandoSql2);

while($dados=mysqli_fetch_assoc($resultado2)){
    $nome = $dados["nome_cliente"];
    $nome_servico=$dados["nome_servico"];  


$cliente=$_POST["nome"];
$funcionario=$_POST["funcionario"];
$servico=$_POST["servico"];
$data=$_POST["data"];
$horario=$_POST["horario"];
$obs=$_POST["obs"];
$titulo=$nome." - ".$nome_servico;


$comandoSql = "insert into agenda (titulo_agenda, id_cliente, id_funcionario, id_servico, data_agenda, horainicio_agenda, obs_agenda)
values
('$titulo', '$cliente', '$funcionario', '$servico', '$data', '$horario', '$obs')";

$resultado=mysqli_query($con, $comandoSql);



//verificando se o comando sql foi executado
if($resultado==true){


header("Location: frm_calendario_beauty.php");

}else
    echo "Erro no cadastro";
}