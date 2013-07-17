<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>SMD</title>
        <link href="../assets/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />  
    </head>
    <body class="fundo">
    	<div class="hero-unit2">
            <h2 align="center">Pesquisa de Contas</h2>
            <br/>
            <br/>
            <div>
                <form class="form-search" name="usuario_cadastro">
                    <div class="text-center">
                        <input type="text" class="input-medium search-query">
                        <input type="submit" class="btn" value="Pesquisa">
                        <input name="voltar" type="button" class="btn" value="Voltar" onClick="location.href='../assets/smd_principal.php'">
                    </div>    
                    <br/>
                    <table class="table table-hover" style="background:#F8F8F8;">
                    <thead>
                        <tr>
                            <th>Conta</th>
                            <th>Nome</th>
                            <th>Saldo</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                        <tr>
                            <td>01</td>
                            <td>Matheus Araújo Tomaz</td>
                            <td>R$ 500,00</td>
                            <td><a href="#"><img src="images/7662_64x64.png" width="20" height="20" title="detalhes"/></a></td>
                            <td><a href="conta_operacoes.php" target="conteudo"><img src="images/gear_92009.jpg" width="20" height="20" title="operações"/></td>
                            <td><a href="#"><img src="images/11292_128x128.png" width="20" height="20" title="excluir"/></td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td>Carlos Henrique Pereira</td>
                            <td>R$ 1.000,00</td>
                            <td><a href="#"><img src="images/7662_64x64.png" width="20" height="20" title="detalhes"/></a></td>
                            <td><a href="conta_operacoes.php" target="conteudo"><img src="images/gear_92009.jpg" width="20" height="20" title="operações"/></td>
                            <td><a href="#"><img src="images/11292_128x128.png" width="20" height="20" title="excluir"/></td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td>Marcelo Augusto da Silva</td>
                            <td>R$ 5.300,00</td>
                            <td><a href="#"><img src="images/7662_64x64.png" width="20" height="20" title="detalhes"/></a></td>
                            <td><a href="conta_operacoes.php" target="conteudo"><img src="images/gear_92009.jpg" width="20" height="20" title="operações"/></td>
                            <td><a href="#"><img src="images/11292_128x128.png" width="20" height="20" title="excluir"/></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>    
    </body>
</html>
