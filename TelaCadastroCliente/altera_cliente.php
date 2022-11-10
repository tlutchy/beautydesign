<?php
    //1- realizando a conexao com o banco de dados(local,usuario,senha,nomeBanco)
    //$con=mysqli_connect("localhost","root","","bd_lavarapido");
    include "conexao_beauty.php";

    //2- pegando os dados vindos do formulário e armazenando em variáveis
    $id=$_POST["id"];
    $nome=$_POST["nome_cliente"];
    $fone=$_POST["fone_cliente"];
    $cpf=$_POST["cpf_cliente"];
    $nome=$_POST["nome_cliente"];


    //3- criando o comando sql para alteração de registro
    $comandoSql="update cliente set nome_cliente = '$nome', fone_cliente = '$fone', cpf_funcionario = '$cpf', obs_funcionario = '$obs' where id_cliente = '$id'";

    //4- executando o comando sql
    $resultado=mysqli_query($con,$comandoSql);

    //5- verificando se o comando sql foi executado
    if($resultado==true)
        echo "Alterado com sucesso";
    else
        echo "Erro na alteração";

        echo "<br> <a href=lista_funcionario_tabela.php> Listar Funcionários </a>";
    







?>