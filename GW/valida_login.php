<?php 
    
    session_start();
    require('conexao.php');

/*
    //variável que verifica se a autenticação foi realizada
    $usuario_autenticado = false;

    //usuarios do sistema
    $usuarios = array(
        array('usuario' => 'Eduardo', 'password' => '123456'),
        array('usuario' => 'Guest', 'password' => '654321'),
    );


    foreach($usuarios as $user){
        
        if($user['usuario'] == $_POST['usuario'] && $user['password'] == $_POST['password']){
            $usuario_autenticado = true;
        }
    }
   
    if($usuario_autenticado) {
        $_SESSION['autenticado'] = 'SIM';
        header('Location: user.php');
    }else {
        $_SESSION['autenticado'] = 'NAO';
        header('Location: login.php?login=erro');
    }
    */
    
    $usuario_autenticado = false;

    $usuarios = $pdo->query("SELECT * FROM tbUsuario;");

    foreach($usuarios as $user){
        
        if($user['nomeUsuario'] == $_POST['usuario'] && $user['senha'] == $_POST['password']  
          || $user['email'] == $_POST['usuario'] && $user['senha'] == $_POST['password']){
            $usuario_autenticado = true;
        }
    }

    if($usuario_autenticado) {
        $_SESSION['autenticado'] = 'SIM';
        header('Location: user.php');
    }else {
        $_SESSION['autenticado'] = 'NAO';
        header('Location: login.php?login=erro');
    }

?>