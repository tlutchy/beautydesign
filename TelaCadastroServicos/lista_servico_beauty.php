<?php
echo "<h3>  Listagem de Serviços </h3>";
  //1- realizando a conexao com o banco de dados(local,usuario,senha,nomeBanco)

   //$con=mysqli_connect("localhost","root","","bd_lavarapido");
   include "conexao_beauty.php";
  
  /*2- criando o comando sql para consulta  dos registros*/
  
    $comandoSql="select * from servico";

  /*3- executando o comando sql */
    $resultado=mysqli_query($con,$comandoSql);
 

  /*4- pegando os dados da consulta criada e exibindo */
     while($dados=mysqli_fetch_assoc($resultado)){
       $id=$dados["id_servico"];
       $nome=$dados["nome_servico"];
       $valor=$dados["valor"];
       $tipo=$dados["id_tiposervico"];       
       
    
     echo" Id: $id";
     echo"</br> Nome: $nome";
     echo"</br>Preço: $valor";
     echo"</br>Tipo de Serviço: $tipo";     
     echo"<br><a href=exclui_servico_beauty.php?id=$id> Excluir</a>";
     echo"<br><a href=frm_altera_servico_beauty.php?id=$id> Alterar</a>";
    echo"<hr>";
    }

    echo" <a href=frm_cadastra_servico.html> Novo </a>";
    


?>