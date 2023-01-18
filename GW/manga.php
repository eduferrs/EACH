<?php
	
		$x= $_GET['id'];
	
		require('conexao.php');		
		
		$consulta = $pdo->query("SELECT * FROM tbTitulo
								where idTitulo = $x;");
		
			/*while ($contato = $consulta->fetch(PDO::FETCH_ASSOC)) {				
				echo "<h1> {$contato['idNoticia']} </h1>";
				echo "<br />";	
				echo "{$contato['titNoticia']}";
				echo "<br />";	
				echo "{$contato['txtNoticia']}";
				echo "<br />";		
			}*/
				
                    echo "<html lang='pt-br'>
                              <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
                                <link rel='stylesheet' type='text/css' href='library/css/estilo.css'/>

                                <title>GW - News</title>
                              </head>
                              <body>";?>
                              
                                <?php include('menu.php'); ?>
<?php

                    echo   "<section class='d-all'>

                              <div class='noticia'>
                                <div class='img-manga2'>
                                    <img src='library/images/Mangas/". ($x) .".jpg'>        
                                </div>";

                                    while ($titulo = $consulta->fetch(PDO::FETCH_ASSOC)) {				
                                        echo "<h1>{$titulo['nomeTitulo']}</h1>";
                                        echo "<div class='text-center'>Autor: {$titulo['autorTitulo']}<br>";
                                        echo "Ano: {$titulo['anoTitulo']}<br>";
                                        echo "<h3>Sinopse:</h3></div> {$titulo['descricaoTitulo']}";
                                    }  
                                    
                    echo "
                             </div>
                            </section>";?>

                                  <?php include('footer.php'); ?>
<?php
                    echo "   
                              </body>
                            </html>";?>					
