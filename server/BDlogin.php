
    <?php 
    
    // adicionando a conexao a pagina
        include('conexao.php');
        
session_start();
    


$login =  $_POST['login'];
$password = $_POST['senha'];

$conn = new PDO('mysql:host=localhost;dbname=imoveis', 'root', '') or die("Sem acesso ao banco de dados". mysql_error());



/* TENTAR CORRIGIR O ERRO DO LOGIN
https://www.youtube.com/watch?v=VYZsd67_4F4 **/
$result = "SELECT * FROM login WHERE usuario = '$login'";
$row = mysql_num_rows($result);


if($row > 0) {
    $_SESSION['login'] = $login;
    //$_SESSION['senha'] = $senha;
    header('location:site.php'); //OK
    
}
else
   echo "$login . $password";
    
    unset($_SESSION['login']);
    //unset($_SESSION['senha']);
    //header('location:http://localhost/Site/login.php');  //OK


    
    
    ?>
    
    