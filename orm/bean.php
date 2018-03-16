<?php 

require('redbean/rb-mysql.php');
R::setup( 'mysql:host=localhost;dbname=red', 'root', '');

//include('beanLogin.php');

                 





$cliente = R::dispense('registros');

$cliente->nome = $aluno;

//$cliente->idade = 20;

$id = R::store( $cliente );



?>




