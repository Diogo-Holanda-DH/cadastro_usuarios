<?php
// cadastrar.php
include "conexao.php";

$nome = $_POST['nome'];
$data_nasc = $_POST['data_nascimento'];
$salario = $_POST['salario'];
$sexo = $_POST['sexo'];
$cargo = $_POST['cargo'];

// 1º Passo - Comando SQL
$sql = "INSERT INTO tb_cadastrar
        (nome, data_nascimento, salario, sexo, cargo)
        VALUES
        ('$nome', '$data_nasc', '$salario', '$sexo', '$cargo')";
        
// 2º Passo - Preparar a conexão
$inserir = $pdo->prepare($sql);

// 3º Passo - Tentar executar
try{
    $inserir->execute();
    header("Location: cadastrado.php"); 
}catch(PDOException $erro){
    echo "Falha ao inserir!". $erro->getMessage();
}

?>