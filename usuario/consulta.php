<?php
    require_once('../assets/config/conn.php');
    require_once('../handler/usuario/cadastroHandler.php');
    
    $objLogin = new Login();

    if (!$objLogin->verificar('../index.php'))
        exit;

    $query = mysql_query("SELECT * FROM usuario WHERE cod_usuario = {$objLogin->getID()}");
    $usuarioH = mysql_fetch_object($query);
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
            <form name="usuario_consulta" action="<? $SELF_PHP;?>?acao=getUsuario" method="POST">
                <div class="text-center">
                    <input name="usuario_buscaFORM" type="text" class="input-medium search-query">
                    <input name="buscar" type="submit" class="btn" value="Buscar">
                    <input name="voltar" type="button" class="btn" value="Voltar" onClick="location.href='../assets/smd_principal.php'">
                </div>
                
                <br/>
                <table class="table table-hover" style="background:#F8F8F8;">
                    <thead>
                        <tr>
                            <th>Conta</th>
                            <th>Nome</th>
                            <th>Login</th>
                            <th>E-mail</th>
                        </tr>
                    </thead>
                    <tr>
                        <? 
                            $usuarioD = new usuario();
                            $usuarioD->getUsuario();
                        ?>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td>Carlos Henrique Pereira</td>
                        <td>CarlosHenrique</td>
                        <td>carloshenrique@gmail.com</td>
                    </tr>
                    <tr>
                        <td>03</td>
                        <td>Marcelo Augusto da Silva</td>
                        <td>MarceloAugusto</td>
                        <td>marceloaugusto@hotmail.com</td>
                    </tr>
                </table>    
            </form>
        </div> 
    </body>
</html>