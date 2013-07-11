<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />  
<body> 
	<div class="navbar">  
        <div class="navbar-inner">  
            <div class="container">  
                <ul class="nav">  
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
