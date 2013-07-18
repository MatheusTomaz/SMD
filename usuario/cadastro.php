<?php
    require_once('../handler/usuario/cadastroHandler.php');
    define( 'DS', DIRECTORY_SEPARATOR );
    define( 'BASE_DIR', dirname(dirname( __FILE__ )) . DS );
    require_once BASE_DIR . 'handler' . DS . 'logarHandler.php';
    $login = new LoginHandler();
    $login->verificar();
    $usuarioD = new cadastroHandler();
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
            <h2 align="center">Cadastro de Usuários</h2>
            <br/>
            <div align="center" class="text-error"><?=$usuarioD->msg?></div>
            <br/>
            <div>
                <form name="usuario_cadastro" action="cadastro.php" method="POST">
                    <table align="center">
                        <tr>
                            <td>Nome:</td>
                            <td><input name="nome" id="nome" type="text" size="60"></td>
                        </tr>
                        <tr>
                            <td>Login:</td>
                            <td><input name="login" id="login" type="text" size="8" maxlength="8"></td>
                        </tr>
                        <tr>
                            <td>Senha:</td>
                            <td><input name="senha" id="senha" type="password" size="8" maxlength="8"></td>
                        </tr>
                        <tr>
                            <td>E-mail:</td>
                            <td><input name="email" id="email" type="text" size="60"></td>
                        </tr
                        ><tr>
                            <td>Telefone:</td>
                            <td><input name="telefone" id="telefone" type="text" size="60"></td>
                        </tr>
                        <tr>
                            <td>Grupo:</td>
                            <td>
                                <select name="grupo" id="grupo">
                                    <option selected value="User">User</option>
                                    <option value="Admin">Admin</option>
                                </select>
                            </td>
                        </tr>
                    </table>     
                    <br/>
                    <div align="center">
                        <input type="hidden" value="setUsuario" name="acao"/>
                        <input class="btn" name="cadastrar" value="Cadastrar" type="submit">
                        <input class="btn" name="voltar" value="Voltar" type="button" onClick="location.href='../assets/smd_principal.php'">
                    </div>
                </form>
            </div> 
        </div>
    </body>
</html>
