<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="library/css/estilo.css"/>

    <title>GW - Login</title>
  </head>
  <body>
    <?php include('menu.php'); ?>
    
      <section class="d-all">
          
        <div class="d-all text-center">
            <h1>Todas as Notícias:</h1>
            
            <div class="meio">
                <?php 

                    require('conexao.php');

                      $consulta = $pdo->query("SELECT * FROM tbNoticia;");

                        $aux = 1;
                        while ($noticia = $consulta->fetch(PDO::FETCH_ASSOC)) {
                    echo "<div class='meio'>
                                <div class='img-not2'> 
                                    <a href='noticia.php?id=".($aux)."'><img src='library/images/Noticias/". $noticia['idNoticia'] .".jpg'></a>
                                </div>
                                <h1><a href='noticia.php?id=".($aux)."'>{$noticia['titNoticia']}</a><h1>
                            </div>";
                    echo "</div>";
                            $aux = $aux + 1;
                        }
                  ?>
            </div>
        </div>
              
              
      </section>

      <?php include('footer.php'); ?>

  </body>
    
    
</html>