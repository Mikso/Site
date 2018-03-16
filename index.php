<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->


    <!-- Bootstrap -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.js"></script>



</head>

<body>


    <header style="padding-top:50px">
        <nav class="navbar navbar-default navbar-fixed-top" style="padding-left:0px; padding-right:20px; background-color: navy;">

            <div class="navbar-header">
                <a class="navbar-brand" href="#"></a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="#">Página Inicial</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Suporte</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>

        </nav>


    </header>

    <!--Imagens em rotatividade -->
    <div class="container" style="padding:50px;">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">

            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">

                <div class="item active">
                    <img class="img-responsive center-block" src="bootstrap/img/casa1.jpg" alt="casa1" style="width: 500px; height: 300px">
                </div>

                <div class="item">
                    <img class="img-responsive center-block" src="bootstrap/img/h1.jpg" alt="casa2" style="width: 500px; height: 300px">
                </div>

                <div class="item">
                    <img class="img-responsive center-block" src="bootstrap/img/h2.jpg" alt="casa3" style="width: 500px; height: 300px">
                </div>

            </div>

            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>

            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>

        </div><br><br>

    </div>


    <div class="container text-center">
        <div class="row">
            <div class="col-md-4">
                <div class="well">
                    <h2 class="text-center"><span class="label label-info">Publique</span></h2>
                    <h3 class="text-center">Seu imóvel é anunciado a milhares de pessoas no nosso site.</h3>
                </div>
            </div>
            <div class="col-md-4">
                <div class="well">
                    <h2 class="text-center"><span class="label label-info">Personalize</span></h2>
                    <h3 class="text-center">Faça do seu produto, um marketing de sucesso, atraia interessados.</h3>
                </div>
            </div>
            <div class="col-md-4">
                <div class="well" style="height: 200px;">
                    <h2 class="text-center"><span class="label label-info">Sem Custos</span></h2>
                    <h3 class="text-center">Negociando seu imóvel não cobramos nada pelo serviço.</h3>
                </div>
            </div>
        </div>
        <!--/row-->
    </div>
    <!--container-->





</body>

</html>