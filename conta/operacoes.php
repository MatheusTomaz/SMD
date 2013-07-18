<?php
    define( 'DS', DIRECTORY_SEPARATOR );
    define( 'BASE_DIR', dirname(dirname( __FILE__ )) . DS );
    require_once BASE_DIR . 'handler' . DS . 'logarHandler.php';
    $login = new LoginHandler();
    $login->verificar();
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
            <h2 align="center">Operações</h2>
            <br/>
            <div align="center">
                <select>
                    <option selected value="">Selecione a operação</option>
                    <option value="opa">Empréstimo</option>
                    <option value="opa">Pagamento</option>
                </select>
            </div>
            <form name="usuario_cadastro">
                <table align="center">
                    <tr>
                        <td>Nome:</td>
                        <td><input name="name" type="text" disabled value="Matheus Araújo Tomaz"size="60"></td>
                        <td> Saldo:</td>
                        <td><input name="name" type="text" disabled value="R$ 500,00" style="color:#00CC00;" size="60"></td>
                    </tr>
                    <tr>
                        <td>Descrição:</td>
                        <td><input name="name" type="text" size="60"></td>
                        <td> Valor:</td>
                        <td><input name="name" type="text" size="60"></td>
                    </tr>
                </table>
                <div align="center">
                    <input name="gravar" value="Gravar" class="btn" type="submit"><input name="voltar" value="Voltar" class="btn" type="button" onClick="location.href='SMD_principal.php'">
                </div>
                <br/>
            </form>
        </div>
    </body>
</html>
