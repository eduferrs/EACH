<?php 

    session_start();
    
    if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM'){
        header('Location: login-admin.php?login=erro2');
    }  
?>

<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="library/css/estilo.css"/>

    <title>Página de login</title>
  </head>
  <body>
    <?php include('menu.php'); ?>
     
    <section class="d-all">
        <div class="menu-lat">
            <div  style="width: 50%; height: 79vh; margin: 0 auto; text-align: center;">
                
                    <a href="frame-admin.php?op=1" target="janela">Mensagens</a>
                    <a href="frame-admin.php?op=2" target="janela">Avaliações</a>
                    <a href="frame-admin.php?op=3" target="janela">Postar Notícia</a>

            </div>
        </div>
        
        <div class="panel">
            <iframe class="frame" name="janela"></iframe>
        </div>
    </section>
      
  <//?php include('footer.php'); ?>
  </body>
</html>