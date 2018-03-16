<?php

// adiciona a conexao
    include('conexao.php');



$nome = "";
$sobrenome = "";
$username = ""; 
$idade = "";
$rg = "";
$telefone = "";
$email = "";
$senha = "";



$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$username = $_POST['username'];
$idade = $_POST['idade'];
$rg = $_POST['rg'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$senha = $_POST['senha'];


    $query2 = "INSERT INTO 
    cliente(
    nome,
    sobrenome,
    idade,
    username,
    rg,
    telefone,
    email,
    senha)
    VALUES (
    '$nome',
    '$sobrenome',
    '$idade',
    '$username',
    '$rg',
    '$telefone',
    '$email',
    '$senha')";


if(mysqli_query($conn, $query2)) {
    echo "Record Succefully insert into Database";
    
    
}else{
    echo "Error in Query";
}

mysqli_close($conn);

?>