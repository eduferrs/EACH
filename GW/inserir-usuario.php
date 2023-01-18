<?php 

   require('conexao.php');

        $usuario = $_POST["usuario"];
        $email = $_POST["email"];
        $cemail = $_POST["cemail"];
        $senha = $_POST["senha"];
        $csenha = $_POST["csenha"];
        
        /*echo "$usuario<br>";
    echo "$email<br>";
    echo "$cemail<br>";
    echo "$senha<br>";
    echo "$csenha<br>";*/
if($email == $cemail && $senha == $csenha){
    
    /*$usuario = isset($_POST['usuario'])? $_POST['usuario'] :'';
    $email = isset($_POST['email'])? $_POST['email'] :'';
    $senha = isset($_POST['senha'])? $_POST['senha'] :'';*/

		
	try {
		//Linha Conexão	
		$stmt = $pdo->prepare("INSERT INTO tbUsuario VALUES(null,'$usuario','$email','$senha')");		
		$stmt->execute();				 				 
		
		/*echo ("<script>
				window.alert('Categoria criada com sucesso!');
				window.location.href='cadastro.php';			
			   </script>"
			 );*/
        header('Location: login.php?cadastro=ok');
        
	}catch(PDOException $e) {
		echo 'Error: ' . $e->getMessage();
	}
}elseif($email != $cemail && $senha != $csenha) {
    
    header('Location: cadastro.php?cadastro=erro1');
    
}elseif($senha != $csenha) {
    
    header('Location: cadastro.php?cadastro=erro2');
    
}else {
    header('Location: cadastro.php?cadastro=erro3');
}

    

   
?>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>Página de login</title>
  </head>
  <body>
    


  </body>

   
</html>