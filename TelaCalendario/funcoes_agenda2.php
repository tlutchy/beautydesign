<?php

function listaClienteSelect2(){

include "conexao_beauty.php";

 $comandoSql="select * from cliente";

/*3- executando o comando sql */
 $resultado=mysqli_query($con,$comandoSql);

echo "<select name='nome' id='nome' class='former-control rounded-left'>";
echo "<option selected=selected>Selecione...</option>";


/*4- pegando os dados da consulta criada e exibindo */
  while($dados=mysqli_fetch_assoc($resultado)){
    $id=$dados["id_cliente"];
    $nome=$dados["nome_cliente"];
    
echo "<option value=$id>$nome</option>";

 }
echo "</select>";
}

function servicoSelect2(){

  include "conexao_beauty.php";

  $comandoSql="select * from servico";
 
 /*3- executando o comando sql */
  $resultado=mysqli_query($con,$comandoSql);
 
 echo "<select name='servico' id='servico' class='former-control'>";
 echo "<option selected=selected>Selecione...</option>";
 
 
 /*4- pegando os dados da consulta criada e exibindo */
   while($dados=mysqli_fetch_assoc($resultado)){
     $id_serv=$dados["id_servico"];
     $nome_serv=$dados["nome_servico"];
     
 echo "<option value=$id_serv>$nome_serv</option>";
 
  }
 echo "</select>";
 
 }

 function funcionarioSelect2(){

  include "conexao_beauty.php";

  $comandoSql="select * from funcionario";
 
 /*3- executando o comando sql */
  $resultado=mysqli_query($con,$comandoSql);
 
 echo "<select name='funcionario' id='funcionario' class='former-control rounded-left'>";
 echo "<option selected=selected>Selecione...</option>";
 
 /*4- pegando os dados da consulta criada e exibindo */
   while($dados=mysqli_fetch_assoc($resultado)){
     $id=$dados["id_funcionario"];
     $nome=$dados["nome_funcionario"];
     
 echo "<option value=$id>$nome</option>";
 
  }
 echo "</select>";
 
 }

?>