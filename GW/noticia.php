<?php
	
		$x= $_GET['id'];
	
		require('conexao.php');		
		
		$consulta = $pdo->query("SELECT * FROM tbNoticia
								where idNoticia = $x;");
		
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
                                <div class='img-not'>
                                    <img src='library/images/Noticias/". ($x) .".jpg'>        
                                </div>";

                                    while ($noticia = $consulta->fetch(PDO::FETCH_ASSOC)) {				
                                        echo "<h1>{$noticia['titNoticia']}</h1>";
                                        echo "{$noticia['txtNoticia']}";
                                    }  
                                    
                    echo "
                             </div>
                            </section>";?>

                                  <?php include('footer.php'); ?>
<?php
                    echo "   
                              </body>
                            </html>";?>					
