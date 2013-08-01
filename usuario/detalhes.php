<?php
    define( 'DS', DIRECTORY_SEPARATOR );
    define( 'BASE_DIR', dirname(dirname( __FILE__ )) . DS );
    
    require_once BASE_DIR . 'handler' . DS . 'usuario' . DS . 'detalhesHandler.php';
    require_once BASE_DIR . 'handler' . DS . 'logarHandler.php';
    $login = new LoginHandler();
    $login->verificar('Admin','User');
    
    $usuarioD = new detalhesHandler($login->id);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>SMD</title>
        <link href="../assets/bootstrap/css/bootstrap2.css" rel="stylesheet" type="text/css" />
	<link href="../assets/bootstrap/css/bootstrap-responsive.css" rel="stylesheet" type="text/css" />
    </head>
    <body class="fundo">
        <div class="hero-unit">
            <h1><?=$usuarioD->nome;?></h1>
        </div>
        <form method="POST" action="detalhes.php?&id=<?=$_GET['id']?>">
            <?=$usuarioD->painel;?>
            <?=$usuarioD->relatorio;?>
        </form>
        <br/>
        <hr/>
    </body>
</html>
