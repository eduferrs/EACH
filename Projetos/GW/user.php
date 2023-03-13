
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="library/css/estilo.css"/>

    <title>Página de login</title>
  </head>
  <body>
    <?php include('menu.php'); ?>
     
<?php 

    session_start();
    
    if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM'){
        header('Location: login.php?login=erro2');
    }  
    echo "Usuário autenticado";

?>
      
    <?php include('footer.php'); ?>
  </body>
</html>