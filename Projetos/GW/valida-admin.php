<?php 
    
    session_start();
    require('conexao.php');
    
    $usuario_autenticado = false;

    $usuarios = $pdo->query("SELECT * FROM tbAdmin;");

    foreach($usuarios as $user){
        
        if($user['nomeAdmin'] == $_POST['usuario'] && $user['senhaAdmin'] == $_POST['password']  
          || $user['emailAdmin'] == $_POST['usuario'] && $user['senhaAdmin'] == $_POST['password']){
            $usuario_autenticado = true;
        }
    }

    if($usuario_autenticado) {
        $_SESSION['autenticado'] = 'SIM';
        header('Location: admin.php');
    }else {
        $_SESSION['autenticado'] = 'NAO';
        header('Location: login-admin.php?login=erro');
    }

?>