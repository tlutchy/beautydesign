<?php

function listaClienteSelect(){

include "conexao_beauty.php";

 $comandoSql="select * from cliente";

/*3- executando o comando sql */
 $resultado=mysqli_query($con,$comandoSql);

echo "<select name='nome' id='nome' class='form-control rounded-left'";


/*4- pegando os dados da consulta criada e exibindo */
  while($dados=mysqli_fetch_assoc($resultado)){
    $id=$dados["id_cliente"];
    $nome=$dados["nome_cliente"];
    
echo "<option value=$id>$nome</option>";

 }
echo "</select>";
}

function servicoSelect(){

  include "conexao_beauty.php";

  $comandoSql="select * from servico";
 
 /*3- executando o comando sql */
  $resultado=mysqli_query($con,$comandoSql);
 
 echo "<select name='servico' id='servico' class='form-control rounded-left'>";
 
 
 /*4- pegando os dados da consulta criada e exibindo */
   while($dados=mysqli_fetch_assoc($resultado)){
     $id=$dados["id_servico"];
     $nome=$dados["nome_servico"];
     
 echo "<option value=$id>$nome</option>";
 
  }
 echo "</select>";
 
 }

 function funcionarioSelect(){

  include "conexao_beauty.php";

  $comandoSql="select * from funcionario";
 
 /*3- executando o comando sql */
  $resultado=mysqli_query($con,$comandoSql);
 
 echo "<select name='funcionario' id='funcionario' class='form-control rounded-left'>";
 
 
 /*4- pegando os dados da consulta criada e exibindo */
   while($dados=mysqli_fetch_assoc($resultado)){
     $id=$dados["id_funcionario"];
     $nome=$dados["nome_funcionario"];
     
 echo "<option value=$id>$nome</option>";
 
  }
 echo "</select>";
 
 }

?>