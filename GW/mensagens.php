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
    </style>
  </head>
  <body>
    
            <?php

            $x= $_GET['id'];		

            $consulta = $pdo->query("SELECT * FROM tbContato
                                    where idContato = $x;");

                while ($contato = $consulta->fetch(PDO::FETCH_ASSOC)) {	
                    echo "<div class='meio' style='text-align: center;
                    border: 2px solid #000;'>";
                    echo "<h1> {$contato['nomeContato']} </h1>";	
                    echo "<h2>E-mail:</h2>{$contato['emailContato']}";
                    echo "<br />";	
                    echo "<h2>Assunto:</h2>{$contato['assuntoContato']}";
                    echo "<br />";	
                    echo "<h2>Mensagem:</h2>{$contato['msgContato']}";
                    echo "<br /><br />";
                    echo "</div>";
                }		
            ?> 

  </body>
</html>