<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />  
<body> 
	<div class="navbar"> 
    	<div class="btn-group" style="float:right; padding:0 10% 0 0;">
	  		<a class="btn" target="conteudo" href="usuario_home.php"><i class="icon-user"></i> Matheus Tomaz</a>
            <button class="btn dropdown-toggle" data-toggle="dropdown"><i class="icon-th-list"></i></button>
            <ul class="dropdown-menu">
                <li class="text-left"><a href="#">Configurações de Conta</a></li>
                <li class="divider"></li>
                <li class="text-right"><a href="#"><i class="icon-off"></i> Sair</a></li>
            </ul>
        </div>     
        <div class="navbar-inner" style="width:80%; padding:0 10% 0 10%;">
            <div class="container">  
                <ul class="nav">
                	<a class="brand" href="#"><b>SMD</b></a>  
                    <li><a href="SMD_principal.php" target="conteudo"><i class="icon-home"></i> Home</a></li>  
                    <li class="dropdown" id="accountmenu">  
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Usuário <b class="caret"></b></a>  
                        <ul class="dropdown-menu">  
                            <li class="text-left"><a href="usuario_cadastro.php" target="conteudo">Cadastro</a></li>  
                            <li class="text-left"><a href="usuario_consulta.php" target="conteudo">Consulta</a></li>  
                        </ul>
                    </li>
                    <li class="dropdown" id="accountmenu">  
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Conta <b class="caret"></b></a>  
                         <ul class="dropdown-menu">  
                            <li class="text-left"><a href="conta_busca.php" target="conteudo">Busca</a></li>  
                         </ul>
                    </li>
                </ul>  
            </div>  
        </div>  
    </div>
    <script type="text/javascript" src="bootstrap/jquery/jquery.js"></script>  
    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>  
    <script type="text/javascript">  
        $(document).ready(function () {  
            $('.dropdown-toggle').dropdown();  
        });  
   </script>  
</body>  
