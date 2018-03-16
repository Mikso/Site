<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->


    <!-- Bootstrap -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" >
      
   
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      
          <script src="bootstrap/js/bootstrap.js"></script>

  
      
      
      
  </head>
  <body class="text-center">
      
      <?php
      //link para o banco de dados
      include('server/conexao.php');
      
      ?>
      
      
      
      <div class="container">
        <div class="py-5 text-center">
          <a href="index.php">
           
            </a>
            <br><br><br>
            <p class="lead">Preencha os dados abaixo para obter seu registro em nosso site</p>
          </div>      
      
          <div class="container bg-primary" style="width: 50%">
            <h4 class="mb-3">FORMULÁRIO</h4>
              
              <div class="container" style="width:100%">
              
                <div class="row">
                    
                    <form role="form" action="server/BD.php" method="post">
                    
                    
                    <br>
                        
                  <div class="col-md-6 mb-3" style="width: 35%; text-align: left;">
                    <div class="form-group">
                      <label for="firstName">Nome</label>
                      <input id="firstName" name="nome" class="form-control" placeholder="Nome" type="text">
                      </div>
                 
                    </div>
                  
                    <div class="col-md-6 mb-3" style="width: 35%; text-align: left;">
                        <label for="lastName">Sobrenome</label>
                        <input id="lastName" name="sobrenome" class="form-control" placeholder="Sobrenome" required type="text">
                    </div>
                    
                     <div class="col-md-6 mb-3" style="width: 20%; text-align: left;">
                        <label for="date">Idade</label>
                        <input id="idade" name="idade" class="form-control" placeholder="Idade" required type="text">
                    </div><br>
                    
                    
                  </div>
                    
                    <div class="mb-3" style="width: 30%; text-align: left;">
                    <label for="rg">RG</label>
                      <input id="rg" name="rg" class="form-control" placeholder="RG" required type="text">
                  </div><br>
                    
              
                  <div class="mb-3" style="width: 50%; text-align: left;">
                    <label for="username">Username</label>
                      <input id="username" name="username" class="form-control" placeholder="Username" required type="text">
                  </div><br>
                  
                  
                
                  <div class="mb-3" style="width: 40%; text-align:left;">
                    <label for="telefone">Telefone</label>
                    <input id="telefone" name="telefone" class="form-control" placeholder="Telefone" required type="text"><br>

                  </div> 
                  
                   <div class="mb-3" style="width: 30%; text-align:left">
                        <label for="cep">CEP</label>
                          <input id="cep" name="cep" class="form-control" placeholder="CEP" required type="text"><br>
                      </div>
                  
                  <div class="mb-3" style="width:40%; text-align:left">
                    <label for="email">Email</label>
                      <input id="email" name="email" class="form-control" placeholder="Email" required type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                      <br>
                  
                  </div>
                  
                  <div class="mb-3" style="width:40%; text-align:left">
                    <label for="senha">Senha</label>
                      <input id="senha" name="senha" class="form-control" placeholder="Senha" required type="password"><br>
                  
                  
                  </div>
                  
                  
              
                  
                  <hr class="mb-4" style="width: 100%; align: left">
                  
              
                  
                  
                  <button class="btn btn-success btn-block" type="submit" id="btnEnviar">Confirmar Cadastro</button>
                
                
                    
                  <br>
              
            </div>
          </form>
              
              
          </div>
      
      </div>
      
    </body>
</html>