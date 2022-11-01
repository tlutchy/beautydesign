<?php
echo "<h3>  Listagem de Clientes </h3>";
  //1- realizando a conexao com o banco de dados(local,usuario,senha,nomeBanco)

   //$con=mysqli_connect("localhost","root","","bd_lavarapido");
   include "conexao_beauty.php";
  
  /*2- criando o comando sql para consulta  dos registros*/
  
    $comandoSql="select * from cliente";

  /*3- executando o comando sql */
    $resultado=mysqli_query($con,$comandoSql);
 

  /*4- pegando os dados da consulta criada e exibindo */
     while($dados=mysqli_fetch_assoc($resultado)){
       $id=$dados["id_cliente"];
       $nome=$dados["nome_cliente"];
       $cpf=$dados["cpf_cliente"];
       $fone=$dados["fone_cliente"];
       $obs=$dados["obs_cliente"];
       
    
     echo" Id: $id";
     echo"</br> Nome: $nome";
     echo"</br>CPF: $cpf";
     echo"</br>Telefone: $fone";
     echo"</br>Observação: $obs";
     echo"<br><a href=exclui_cliente_beauty.php?id=$id> Excluir</a>";
     echo"<br><a href=frm_altera_cliente_beauty.php?id=$id> Alterar</a>";
    echo"<hr>";
    }

    echo" <a href=frm_cadastra_cliente.html> Novo </a>";
    


?>