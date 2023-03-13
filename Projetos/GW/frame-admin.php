<?php
	require('conexao.php');
?>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="library/css/estilo.css"/>
    
    <style>
        
        body {
            /*overflow: hidden;*/
        }
        
        body a {
            color: red;
            text-decoration: none;
        }
        
        article {
			margin-bottom: 800px;
		}  
        
    </style>
  </head>
  <body>

      <?php
      
      $op = $_GET['op'];
      
      if($op==1){
          echo "<div style='text-align: center; font-size: 25px; font-family: 'Libre Baskerville', serif;'>
            <h1>Pessoas que enviaram mensagens:</h1>
          </div>";
          
          $consulta = $pdo->query("SELECT * FROM tbContato;");
		
			while ($contato = $consulta->fetch(PDO::FETCH_ASSOC)) {
                echo "<div class='meio' style='text-align: center;
                    border: 2px solid #000;'>";
				echo "<a href='mensagens.php?id={$contato['idContato']}' target='janela'>";	
					echo "{$contato['nomeContato']}";
				echo "</a>";
				echo "<br />";
                echo "</div>";
			}
          
      }else if($op==2){
          echo "<div style='text-align: center; font-size: 25px; font-family: 'Libre Baskerville', serif;'>
            <h1>Pessoas que fizeram avaliações do site:</h1>
          </div>";
          
          $consulta = $pdo->query("SELECT * FROM tbAvaliacao;");
		
			while ($avaliacao = $consulta->fetch(PDO::FETCH_ASSOC)) {
                echo "<div class='meio' style='text-align: center;
                    border: 2px solid #000;'>";
				echo "<a href='avaliacoes.php?id={$avaliacao['idAvaliacao']}' target='janela'>";	
					echo "{$avaliacao['nome']}";
				echo "</a>";
				echo "<br />";
                echo "</div>";
			}
      }else if($op==3){
          echo "<section class='sec-form'>
        <div class='d-login'>
            <h3>Preencha o formulário:</h3>
            <form enctype='multipart/form-data' action='inserir-noticia.php' target='janela' method='post'>
                <div class='d-all'>
                    <input type='text' name='titulo' placeholder='Título da notícia' class='tx' required/>
                </div>

                <div class='d-all'>
                    <label>Categoria:</label><br>
                    <select name='categoria' class='tx' required>";
          
                        $consulta = $pdo->query("select * from tbcategoria");

                        while ($categoria = $consulta->fetch(PDO::FETCH_ASSOC)) {
                            echo "<option value='{$categoria['categoria']}'> {$categoria['categoria']} </option>";
                        }
                echo "       
                    </select>
                </div>

                <div class='d-all'>
                    <label>Obra:</label>
                    <select name='obra' class='tx' required>";
          
                        $consulta = $pdo->query("select * from tbTitulo");

                        while ($obra = $consulta->fetch(PDO::FETCH_ASSOC)) {	
                            echo "<option value='{$obra['nomeTitulo']}'> {$obra['nomeTitulo']} </option>";	
                        }
                echo "
                </div>
                
                <div class='d-all'>
                    <label>Imagem:</label>				
		            <input type='file' name='txFileContent' class='tx'>
                </div>

                <div class='d-all'>
                    <br><textarea name='texto' class='txa txa2' placeholder='Texto da notícia'></textarea>
                </div>
                
                <div class='d-all'>
                    <input type='submit' class='bt' value='Postar'>
                </div>
            </form>"; ?>
            
          <?php if(isset($_GET['avaliacao']) && $_GET['avaliacao'] == 'ok') { ?>

                        <div style="text-align: center; margin-top: 2%; color: green">
                            Notícia registrada no banco!
                        </div>
                            
                    <?php } ?>
         <?php 
             echo "
        </div>
                </section>";
      }

      ?>
    
  </body>
</html>