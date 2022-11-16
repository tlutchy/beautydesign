<?php
//1- realizando a conexao com o banco de dados(local,usuario,senha,nomeBanco)
//$con=mysqli_connect("localhost","root","","bd_lavarapido");
include "conexao_beauty.php";

//2- pegando os dados vindos do formulário e armazenando em variáveis
$id = $_POST["id"];
$nome = $_POST["nome"];
$fone = $_POST["fone"];
$cpf = $_POST["cpf"];
$senha = $_POST["senha"];
if(isset($_POST["admin"]))
    $admin=1;
else
    $admin=0;

//3- criando o comando sql para alteração de registro
$comandoSql = "update funcionario set nome_funcionario = '$nome', fone_funcionario = '$fone', cpf_funcionario = '$cpf', senha = '$senha', admin='$admin' where id_funcionario = '$id'";

//4- executando o comando sql
$resultado = mysqli_query($con, $comandoSql);

//5- verificando se o comando sql foi executado
if ($resultado == true)
    header("Location: frm_cad_func_painel.php");
else
    echo "Erro na alteração";

echo "<br> <a href=frm_cad_func_painel.php> Listar Funcionários </a>";
