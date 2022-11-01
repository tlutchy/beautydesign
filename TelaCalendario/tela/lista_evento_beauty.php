<?php
echo "<h3>  Calendário </h3>";
  //1- realizando a conexao com o banco de dados(local,usuario,senha,nomeBanco)

   //$con=mysqli_connect("localhost","root","","bd_lavarapido");
   include "conexao_beauty.php";
  
  /*2- criando o comando sql para consulta  dos registros*/
  
    $comandoSql="select * from agenda";

  /*3- executando o comando sql */
    $resultado=mysqli_query($con,$comandoSql);

    
 

  /*4- pegando os dados da consulta criada e exibindo */
     while($dados=mysqli_fetch_assoc($resultado)){
       $id=$dados["id_agenda"];
       $title=$dados["title"];
       $color=$dados["color"];
       $start=$dados["começa"];       
       $end=$dados["termina"];       
       
    
    
    $eventos[] = [
      $id, $title, $color, $start, $end,
    ];
    }

    echo json_encode($eventos);
    


?>