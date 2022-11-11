<?php
echo "<h3>  Listagem de Funcionários </h3>";
  //1- realizando a conexao com o banco de dados(local,usuario,senha,nomeBanco)

   //$con=mysqli_connect("localhost","root","","bd_lavarapido");
   include "conexao_beauty.php";
  
  /*2- criando o comando sql para consulta  dos registros*/
  
    $comandoSql="select a.*, c.nome_cliente, f.nome_funcionario, s.nome_servico from agenda as a inner join cliente as c on a.id_cliente = c.id_cliente inner join funcionario as f on a.id_funcionario = f.id_funcionario inner join servico as s on a.id_servico = s.id_servico";

  /*3- executando o comando sql */
    $resultado=mysqli_query($con,$comandoSql);
 

  /*4- pegando os dados da consulta criada e exibindo */
     while($dados=mysqli_fetch_assoc($resultado)){
       $id=$dados["id_agenda"];
       $cliente=$dados["nome_cliente"];
       $servico=$dados["nome_servico"];
       $funcionario=$dados["nome_funcionario"];
       $data=$dados["data_agenda"];
       $obs=$dados["obs_agenda"];
       
    
     echo" Id: $id";
     echo"</br> Cliente: $cliente";
     echo"</br> Funcionário: $funcionario";
     echo"</br> Serviço: $servico";
     echo"</br> Data: $data";
     echo"<br><a href=exclui_agenda_beauty.php?id=$id> Excluir</a>";
     echo"<br><a href=frm_altera_agenda_beauty.php?id=$id> Alterar</a>";
    echo"<hr>";
    }

    echo" <a href=frm_cadastra_agenda.php> Novo </a>";
    


?>