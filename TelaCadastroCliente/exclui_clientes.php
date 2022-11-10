<?php

//1- realizando a conexao com o banco de dados(local,usuario,senha,nomeBanco)

//$con=mysqli_connect("localhost","root","","bd_lavarapido");
include "conexao_beauty.php";

//2- pegar o valor vindo da url
if(isset($_POST['multi-delete']))
{
    $all_id = $_POST['checkbox_id'];
    $extrai_id = implode(',', $all_id);
    //echo $extrai_id;

    $comandoSql="delete from cliente where id_cliente in($extrai_id)";
    $resultado=mysqli_query($con,$comandoSql);

    header("Location: frm_cad_cli_painel.php");
}


//3- criando o comando sql para exclusao do registro


/*4- executando o comando sql
$resultado=mysqli_query($con,$comandoSql);

//5- verificando se o comando sql foi executado
if($resultado==true){
    echo "Excluído com sucesso";
    echo "<a href=lista_funcionario.php> Listar Funcionarios </a>";
}else{
    echo "Erro na exclusão";
}
*/
?>