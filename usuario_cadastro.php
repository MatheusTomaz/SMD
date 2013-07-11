<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>SMD</title>
        <link href="css/menu_css.css" rel="stylesheet" type="text/css" />
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />  
  
	</head>

	<body class="corp">
    	<div class="hero-unit2">
            <h2 align="center">Cadastro de Usuários</h2>
            <br/>
            <br/>
            <div class="margem" align="left">
                <form name="usuario_cadastro">
                	<table align="center">
                    	<tr>
                        	<td>Nome:</td>
                            <td><input name="name" type="text" size="60"></td>
                        </tr>
                        <tr>
                        	<td>E-mail:</td>
                            <td><input name="email" type="text" size="60"></td>
                        </tr>
                        <tr>
                        	<td>Login:</td>
                            <td><input name="login" type="text" size="8" maxlength="8"></td>
                        </tr>
                        <tr>
                        	<td>Senha:</td>
                            <td><input name="senha" type="password" size="8" maxlength="8"></td>
                        </tr>
                    </table>     
                    <br/>
                    <div align="center">   
                        <input class="btn" name="cadastrar" value="Cadastrar" type="submit">
                        <input class="btn" name="voltar" value="Voltar" type="button" onClick="location.href='SMD_principal.php'">
                    </div>
                </form>
            </div> 
    	</
	</body>
</html>
