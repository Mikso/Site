   
    <?php 
    
    // adicionando a conexao a pagina
        include('conexao.php');
        
    $usuario = $_POST['usuario_l'];
        
    $senha = $_POST['senha_l'];
    
    // query de insercao
    
    $query = "INSERT INTO login(usuario, senha) VALUES ('$usuario', '$senha')";
        

  if(mysqli_query($conn, $query)) {
    echo "Record Succefully insert into Database";
}else{
    echo "Error in Query";
}
    
    mysqli_close($conn);
    ?>
    
    