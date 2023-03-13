<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" type="text/css" href="library/css/estilo.css">
      <title>GW - Avaliação</title>
  </head>
  <body>
      
      <?php include('menu.php') ?>
      
      
      <section class="sec-bg-avaliacao">
      <section class="sec-form" style="margin-top: 5vh;">
        <div class="d-login">
              <div class="d-all">
                  
                  <h3>Avalie nosso site:</h3>
                  
                  <?php if(isset($_GET['avaliacao']) && $_GET['avaliacao'] == 'erro') { ?>

                        <div style="text-align: center; margin-top: 2%; color: red">
                            Selecione uma das opções de 1 a 5<br>
                        </div>
                            <br>
                    <?php } ?>
                    <form action="inserir-avaliacao.php" method="post">
                        <input type="radio" name="avaliacao" value="1">1
                        <input type="radio" name="avaliacao" value="2">2
                        <input type="radio" name="avaliacao" value="3">3
                        <input type="radio" name="avaliacao" value="4">4
                        <input type="radio" name="avaliacao" value="5">5<br><br>
                        
                        <div class="d-all">
                            <label>Nome:</label><br>
                            <input style="width: 70%;" type="text" name="nome" class="tx" required/><br><br>
                        </div>

                        <div class="d-all">
                            Deixe um comentário (opcional):
                            <textarea class="txa" name="comentario" rows="7" cols="30"></textarea><br><br>
                        </div>
                        
                        <div class="d-all">
                            <input type="submit" value="Enviar" class="bt"><br>
                        </div>
                    </form>
                  
                  <?php if(isset($_GET['avaliacao']) && $_GET['avaliacao'] == 'ok') { ?>

                        <div style="text-align: center; margin-top: 2%; color: green">
                            Avaliação enviada com sucesso!
                        </div>
                            
                    <?php } ?>
                  
                  <h3>1 - Péssimo | 3 - Regular | 5 - Ótimo</h3>
              </div>

        </div>
          
          
          
          
          
      </section>
      </section>

    <?php include('footer.php') ?>

  </body>
</html>