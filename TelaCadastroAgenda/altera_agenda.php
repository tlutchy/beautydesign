<?php
//1- realizando a conexao com o banco de dados(local,usuario,senha,nomeBanco)
//$con=mysqli_connect("localhost","root","","bd_lavarapido");
include "conexao_beauty.php";

//2- pegando os dados vindos do formulário e armazenando em variáveis
$id = $_POST["id"];
$cliente = $_POST["nome"];
$funcionario = $_POST["funcionario"];
$servico = $_POST["servico"];
$data = $_POST["data"];
$hora = $_POST["horario"];
$obs = $_POST["obs"];
$titulo = $_POST["nome"] . " " . $_POST["servico"];


//3- criando o comando sql para alteração de registro
$comandoSql = "update agenda set titulo_agenda = '$titulo', id_cliente = '$cliente', id_funcionario = '$funcionario', id_servico = '$servico', data_agenda = '$data', horainicio_agenda = '$hora', obs_agenda = '$obs' where id_agenda = '$id'";

//4- executando o comando sql
$resultado = mysqli_query($con, $comandoSql);

//5- verificando se o comando sql foi executado
if ($resultado == true)
    header("Location: frm_cad_ag_painel.php");
else
    echo "Erro na alteração";

echo "<br> <a href=frm_cad_cli_painel.php> Listar Funcionários </a>";
