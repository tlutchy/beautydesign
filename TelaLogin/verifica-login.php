<?php

include "conexao_beauty.php";


$nome=$_POST["nome"];
$senha=$_POST["senha"];


  $comandoSql = "SELECT * FROM funcionario WHERE nome_funcionario = '$nome' AND senha = '$senha'";
  
  
  $resultado=mysqli_query($con, $comandoSql);

  while($dados=mysqli_fetch_assoc($resultado)){
    $id=$dados["id_funcionario"];
    $nome=$dados["nome_funcionario"];
  }
  
  $quantidade = $resultado->num_rows;

  if($quantidade == 1){
    

    if(!isset($_SESSION)){
        session_start();
    }

    $_SESSION['id'] = $id;
    $_SESSION['nome'] = $nome;

    header("Location: /tcc/TelaPainelAdmin/index.php");


  }else{
    echo "Falha ao logar! Nome ou senha incorretos";
    echo "<br><a href=tela-login.html>Voltar</a>";
  }




?>