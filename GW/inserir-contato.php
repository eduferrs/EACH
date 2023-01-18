<?php 

   require('conexao.php');
    
    $nome = isset($_POST['nome'])? $_POST['nome'] :'';
    $email = isset($_POST['email'])? $_POST['email'] :'';
    $assunto = isset($_POST['assunto'])? $_POST['assunto'] :'';
    $mensagem = isset($_POST['mensagem'])? $_POST['mensagem'] :'';

    if($mensagem == "") {
        header('Location: fale-conosco.php?mensagem=erro');
    }else {

        try {
            //Linha Conexão	
            $stmt = $pdo->prepare("INSERT INTO tbContato VALUES(null,'$nome','$email','$assunto','$mensagem')");		
            $stmt->execute();				 				 

            /*echo ("<script>
                    window.alert('Categoria criada com sucesso!');
                    window.location.href='cadastro.php';			
                   </script>"
                 );*/
            header('Location: fale-conosco.php?mensagem=ok');

        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            
        }
    }
?>