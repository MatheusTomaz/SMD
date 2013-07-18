<?php
    define( 'DS', DIRECTORY_SEPARATOR );
    define( 'BASE_DIR', dirname(dirname( __FILE__ )) . DS );
    
    require_once('../handler/usuario/consultaHandler.php');
    require_once BASE_DIR . 'handler' . DS . 'logarHandler.php';
    
    $login = new LoginHandler();
    $login->verificar();
    
    $usuarioD = new consultaHandler();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>SMD</title>
        <link href="../assets/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />  
    </head>
    <body class="fundo">
        <div class="hero-unit2">
            <h2 align="center">Consulta de Usuários</h2>
        </div>
        <br/>
        <br/>
        <div>
            <form name="usuario_consulta" action="consulta.php" method="POST">
                <div class="text-center">
                    <input name="usuario_busca" type="text" class="input-medium search-query">
                    <input type="hidden" value="getUsuario" name="acao"/>
                    <input name="buscar" type="submit" class="btn" value="Buscar">
                    <input name="voltar" type="button" class="btn" value="Voltar" onClick="location.href='../assets/smd_principal.php'">
                </div>
                
                <br/>
                <div class="<?=$usuarioD->class;?>" align="center"><?=$usuarioD->msg;?></div>
                <br>
                <?=$usuarioD->relatorio;?>
            </form>
        </div> 
    </body>
</html>
