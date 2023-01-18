<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="library/css/estilo.css"/>

    <title>GW - Cadastro de usuário</title>
  </head>
  <body>
      
    <?php include('menu.php'); ?>
      
    <section class="sec-bg-cadastro">
    <section class="sec-form">
        <div class="d-login">
            <h3>Cadastro de usuário:</h3>
            <form action="inserir-usuario.php" method="post">
                <div class="d-all">
                    <input type="text" name="usuario" placeholder="Nome de usuário" class="tx" required/>
                </div>

                <div class="d-all">
                    <input type="email" name="email" placeholder="E-mail" class="tx" required/>
                </div>
                
                <div class="d-all">
                    <input type="email" name="cemail" placeholder="Confirmar e-mail" class="tx" required/>
                </div>

                <div class="d-all">
                    <input type="password" name="senha" placeholder="Senha" class="tx" required/>
                </div>

                <div class="d-all">
                    <input type="password" name="csenha" placeholder="Confirmar senha" class="tx" required/>
                </div>
                
                
                
                <?php if(isset($_GET['cadastro']) && $_GET['cadastro'] == 'erro1') { ?>

                    <div style="text-align: center; margin-top: 2%;">
                        * Senhas digitadas não coincidem<br>
                        * E-mails digitados não coincidem
                    </div>

                <?php } ?>
                
                <?php if(isset($_GET['cadastro']) && $_GET['cadastro'] == 'erro2') { ?>

                    <div style="text-align: center; margin-top: 2%;">
                        * Senhas digitadas não coincidem
                    </div>

                <?php } ?>
                
                <?php if(isset($_GET['cadastro']) && $_GET['cadastro'] == 'erro3') { ?>

                    <div style="text-align: center; margin-top: 2%;">
                        * E-mails digitados não coincidem
                    </div>

                <?php } ?>
                

                <div class="d-all">
                    <input type="submit" class="bt" value="Cadastrar">
                </div>
            </form>
        </div>
    </section>
        </section>

      <?php include('footer.php'); ?>
  </body>
</html>