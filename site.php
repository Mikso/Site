<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->


    <!-- Bootstrap -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" >
      
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.js"></script>

      
 <?php
       
      //SE TUDO ESTIVER CERTO, ELE VEM PARA ESTA PAGINA
      if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
      {
          unset($_SESSION['login']);
          unset($_SESSION['senha']);
          
          //EDITE ESTA LINHA PARA NAO IR PARA O MENU.PHP
          header('location:menu.php');
      }
      
      $logado = $_SESSION['login'];
      
      ?>     
      
      
      
      
      
      
      
  </head>
 
    
  <body class="text-center" style="padding-top: 50px;">
    
    <?php
      
      echo "Bem vindo";
      
      ?>
    
    
    
    
    </body>
</html>