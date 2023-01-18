<?php 

   require('conexao.php');
    
    $titulo = isset($_POST['titulo'])? $_POST['titulo'] :'';
    $categoria = isset($_POST['categoria'])? $_POST['categoria'] :'';
    $obra = isset($_POST['obra'])? $_POST['obra'] :'';
    $texto = isset($_POST['texto'])? $_POST['texto'] :'';

    $consulta = $pdo->query("SELECT MAX(idNoticia) FROM tbNoticia;");
    $total = $consulta->fetch(PDO::FETCH_ASSOC);
    $total2 = $total['MAX(idNoticia)'];
    $total2 = $total2 + 1;


if($titulo != "" && $categoria != "" && $obra != "" && $texto != ""){
        try {
            //Linha Conexão	
            $stmt = $pdo->prepare("INSERT INTO tbNoticia VALUES(null,'$titulo','$texto','$categoria','$obra')");		
            $stmt->execute();				 				 

            echo ("<script>
                    window.alert('Notícia registrada no banco!');
                    window.location.href='frame-admin.php?op=3';		
                   </script>"
                 );

        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            
        }
}

$erro = 0;
	
	if(isset($_FILES["txFileContent"])){
		$arqNome = $_FILES["txFileContent"]["name"];
		$arqTipo = $_FILES["txFileContent"]["type"];
		$arqTamanho = $_FILES["txFileContent"]["size"];
		$arqNomeTemp = $_FILES["txFileContent"]["tmp_name"];
		$erro = $_FILES["txFileContent"]["error"];
		
		if($erro==0){
			if(is_uploaded_file($arqNomeTemp)){
				if(move_uploaded_file($arqNomeTemp,"library/images/Noticias/" . $total2 . ".jpg")){
					echo ("<script>
                    window.alert('Notícia registrada no banco!');
                    window.location.href='frame-admin.php?op=3';			
                   </script>"
                 );
				}
				else{
					$erro = "Falha ao mover o arquivo";
				}
			}
			else{
				$erro = "Erro no envio: arquivo não recebido com sucesso.";
			}
			
		}
		else{
			$erro = "Erro no envio: " . $erro;			
		}
		
	}
	else{
		$erro = "Arquivo enviado não encontrado";
	}
	
	if($erro!==0){
		echo $erro;
	}
    
?>