<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" type="text/css" href="library/css/estilo.css">
      <title>GW - Contato</title>
  </head>
  <body>
      
      <?php include('menu.php') ?>
      
      
      
      <section class="sec-bg-contato">
      <section class="sec-form-contato">
           
        <div class="div-center">
          <div class="d-1of2">
            <h1>Entre em contato</h1><br/>

            <h3>Telefones:<br/></h3>
            <p><a href="tel:5511912345678">(011) 91234-5678</a></p>
            <p><a href="tel:5511987654321">(011) 98765-4321</a></p>

            <h3>E-mail<br/></h3>
            <p><a href="mailto:test@test.com.br">gw.team@gmail.com.br</a></p>

            <h3>Endereço:</h3>
            <p>Rua Marcial, 25 - São Paulo/SP <br/>
              CEP: 03169-040
            </p>
            

          </div>

          <div class="d-1of2">
              <div style="text-align: center; width: 100%;">
 
              <h3>Envie uma mensagem:</h3>
            <form action="inserir-contato.php" method="post">
              <div class="d-all">
                <input type="text" name="nome" placeholder="Nome" class="tx" required>
              </div>

              <div class="d-all">
                <input type="text" name="email" placeholder="E-mail" class="tx" required>
              </div>

              <div class="d-all">
                <input type="text" name="assunto" placeholder="Assunto" class="tx" required>
              </div>
                
                <div class="d-all">
                    <textarea name="mensagem" placeholder="Mensagem..." class="txa txa2" required></textarea>
                </div>
              <div class="d-all">
                <input type="submit" value="Enviar" class="bt">
                </div>
                
            </form>
          </div>
        </div>
        </div>
          
          <?php if(isset($_GET['mensagem']) && $_GET['mensagem'] == 'ok') { ?>

                        <div style="text-align: center; margin-top: 2%; color: green">
                            <strong>Mensagem registrada! Por favor, aguarde nossa equipe entrar em contato.</strong>
                        </div>

         <?php } ?>
          
    </section>
    </section>
        
      
      

    <?php include('footer.php') ?>

  </body>
</html>