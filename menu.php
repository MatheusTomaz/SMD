<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />  
<body> 
	<div class="navbar">  
        <div class="navbar-inner" style="width:80%; padding:0 10% 0 10%;">  
            <div class="container">  
                <ul class="nav">
                	<a class="brand" href="#"><b>SMD</b></a>  
                    <li><a href="SMD_principal.php" target="conteudo">Home</a></li>  
                    <li class="dropdown" id="accountmenu">  
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Usuário<b class="caret"></b></a>  
                        <ul class="dropdown-menu">  
                            <li class="text-left"><a href="usuario_cadastro.php" target="conteudo">Cadastro</a></li>  
                            <li class="text-left"><a href="usuario_consulta.php" target="conteudo">Consulta</a></li>  
                        </ul>
                    </li>
                    <li class="dropdown" id="accountmenu">  
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Conta<b class="caret"></b></a>  
                         <ul class="dropdown-menu">  
                            <li class="text-left"><a href="conta_busca.php" target="conteudo">Busca</a></li>  
                         </ul>
                    </li>
                    <div style=" padding:0px 0px 0px 85%;">
                        <div class="btn-group">
                            <button class="btn">Matheus Tomaz</button> 
                            <button class="btn dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">  
                                <li class="text-left"><a href="#">Sair</a></li>
                            </ul>
                        </div>        
                    </div>
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
