<?php
    define( 'DS', DIRECTORY_SEPARATOR );
    define( 'BASE_DIR', dirname(dirname( __FILE__ )) . DS );
    
    require_once BASE_DIR . 'handler' . DS . 'logarHandler.php';
    
    $login = new LoginHandler();
?>

<link href="../assets/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />  
<body> 
    <div class="navbar"> 
        <div class="btn-group" style="float:right; padding:0 10% 0 0;">
            <a class="btn" target="frame" href="../usuario/home.php"><i class="icon-user"></i> <?=$login->nome;?></a>
            <button class="btn dropdown-toggle" data-toggle="dropdown"><i class="icon-th-list"></i></button>
            <ul class="dropdown-menu">
                <li class="text-left"><a href="#">Configurações de Conta</a></li>
                <li class="divider"></li>
                <li class="text-right">
                    <a href="principal.php?logout=1"><i class="icon-off"></i> Sair</a>
                </li>
            </ul>
        </div>     
        <div class="navbar-inner" style="width:80%; padding:0 10% 0 10%;">
            <div class="container">  
                <ul class="nav">
                    <a class="brand" href="#"><b>SMD</b></a>  
                    <li><a href="../assets/smd_principal.php" target="frame"><i class="icon-home"></i> Home</a></li>  
                    <li class="dropdown" id="accountmenu">  
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Usuário <b class="caret"></b></a>  
                        <ul class="dropdown-menu">  
                            <li class="text-left"><a href="cadastro.php" target="frame">Cadastro</a></li>  
                            <li class="text-left"><a href="consulta.php" target="frame">Consulta</a></li>  
                        </ul>
                    </li>
                    <li class="dropdown" id="accountmenu">  
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Conta <b class="caret"></b></a>  
                        <ul class="dropdown-menu">  
                            <li class="text-left"><a href="../conta/busca.php" target="frame">Busca</a></li>  
                        </ul>
                    </li>
                </ul>  
            </div>  
        </div>  
    </div>
    <script type="text/javascript" src="../assets/bootstrap/jquery/jquery.js"></script>  
    <script type="text/javascript" src="../assets/bootstrap/js/bootstrap.js"></script>  
    <script type="text/javascript">  
        $(document).ready(function () {  
            $('.dropdown-toggle').dropdown();  
        });  
    </script>  
</body>  
