<?php
echo "<h3>  Listagem de Funcionários </h3>";
  //1- realizando a conexao com o banco de dados(local,usuario,senha,nomeBanco)

   //$con=mysqli_connect("localhost","root","","bd_lavarapido");
   include "conexao_beauty.php";
  
  /*2- criando o comando sql para consulta  dos registros*/
  
    $comandoSql="select * from funcionario";

  /*3- executando o comando sql */
    $resultado=mysqli_query($con,$comandoSql);
 

  /*4- pegando os dados da consulta criada e exibindo */
     while($dados=mysqli_fetch_assoc($resultado)){
       $id=$dados["id_funcionario"];
       $nome=$dados["nome_funcionario"];
       $cpf=$dados["cpf_funcionario"];
       $fone=$dados["telefone_funcionario"];
       $senha=$dados["senha"];
       
    
     echo" Id: $id";
     echo"</br> Nome: $nome";
     echo"</br>CPF: $cpf";
     echo"</br>Telefone: $fone";
     echo"</br>Senha: $senha (Eu sei que a senha não pode aparececer. Ainda não está totalmente pronto. É só um teste)" ;
     echo"<br><a href=exclui_funcionario_beauty.php?id=$id> Excluir</a>";
     echo"<br><a href=frm_altera_funcionario_beauty.php?id=$id> Alterar</a>";
    echo"<hr>";
    }

    echo" <a href=index.html> Novo </a>";
    


?>