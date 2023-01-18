<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="library/css/estilo.css"/>

    <title>GW - Login</title>
  </head>
  <body>
    <?php include('menu.php'); ?>
    
      <section class="sec-bg-login-admin">
        <section class="sec-form-login-admin">
          
              <div class="d-login" style="margin-top: 6%;">
                  <form action="valida-admin.php" method="post">
                      <div class="d-all">
                          <label>Nome ou e-mail</label><br/>
                          <input type="text" name="usuario" class="tx"/>
                      </div>

                      <div class="d-all">
                          <label>Senha</label><br/>
                          <input type="password" name="password" class="tx"/>
                      </div>

                      <!--função isset - verifica se o indíce 'login' (definido no script de validação) existe-->
                      <?php if(isset($_GET['login']) && $_GET['login'] == 'erro') { ?>

                      <div style="text-align: center;">
                        <span style="color: red;">Usuário ou senha inválido(s)</span>
                      </div>

                      <?php } ?>
                      
                      <?php if(isset($_GET['login']) && $_GET['login'] == 'erro2') { ?>

                      <div style="text-align: center;">
                        <span style="color: red;">Faça login primeiro!</span>
                      </div>

                      <?php } ?>
                      
                      <?php if(isset($_GET['cadastro']) && $_GET['cadastro'] == 'ok') { ?>

                        <div style="text-align: center; margin-top: 2%; color: green">
                            Cadastro realizado com sucesso!
                        </div>

                      <?php } ?>

                      <div class="d-all">
                          <input type="submit" value="Login" class="bt"/>
                      </div> 
                  </form>
              </div>
      </section>
    </section>

      <?php include('footer.php'); ?>
  </body>
    
    
</html>