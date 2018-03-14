<?php


$host = "localhost";

$user = "root";

$password = "";

$dbname = "imoveis";

$conn = mysqli_connect($host, $user, $password, $dbname);


// checar conexao
    if(!$conn) {
        die("Falha na conexao");
    }

echo "Conectado com sucesso";


?>