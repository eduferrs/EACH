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

            $consulta = $pdo->query("SELECT * FROM tbAvaliacao
                                    where idAvaliacao = $x;");

                while ($avaliacao = $consulta->fetch(PDO::FETCH_ASSOC)) {	
                    echo "<div class='meio' style='text-align: center;
                    border: 2px solid #000;'>";
                    echo "<h1> {$avaliacao['nome']} </h1>";	
                    echo "<h2>Nota concedida:</h2>{$avaliacao['valor']}";
                    echo "<br />";	
                    echo "<h2>Comentário:</h2>{$avaliacao['comentario']}";
                    echo "<br /><br />";
                    echo "</div>";
                }		
            ?> 

  </body>
</html>