<?php 

   require('conexao.php');
    
    $nome = isset($_POST['nome'])? $_POST['nome'] :'';
    $avaliacao = isset($_POST['avaliacao'])? $_POST['avaliacao'] :'';
    $comentario = isset($_POST['comentario'])? $_POST['comentario'] :'';

    if($avaliacao == 0) {
        header('Location: avaliacao-site.php?avaliacao=erro');
    }else {

        try {
            //Linha Conexão	
            $stmt = $pdo->prepare("INSERT INTO tbAvaliacao VALUES(null,'$nome','$avaliacao','$comentario')");		
            $stmt->execute();				 				 

            /*echo ("<script>
                    window.alert('Categoria criada com sucesso!');
                    window.location.href='cadastro.php';			
                   </script>"
                 );*/
            header('Location: avaliacao-site.php?avaliacao=ok');

        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            
        }
    }
?>