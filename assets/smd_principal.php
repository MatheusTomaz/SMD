<?php
    define( 'DS', DIRECTORY_SEPARATOR );
    define( 'BASE_DIR', dirname(dirname( __FILE__ )) . DS );
    require_once('../handler/usuario/solicitacaoHandler.php');
    require_once('../handler/usuario/buscaSolicitacao.php');
    require_once BASE_DIR . 'handler' . DS . 'logarHandler.php';
    $login = new LoginHandler();
    $login->verificar('Admin','User');
    
    $usuarioD = new solicitacaoHandler();
    $solicita = new buscaSolicita($login->id);
?>
<!DOCTYPE html>

<script type="text/javascript" src="../assets/bootstrap/jquery/jquery.js"></script>  
<script type="text/javascript" src="../assets/bootstrap/js/bootstrap.js"></script>  
<script type="text/javascript">
    $(document).ready(function(){
            atualiza();
    });

    function atualiza(){
       $.get('../handler/usuario/buscaSolicitacao.php', function(resultado){
            $('#conteudo').html(resultado);
       })
       setTimeout('atualiza()', 3000);
    }
    
    function del(id) {    
        if (confirm('Cancelar Solicitação?')) {    
            location.href = 'smd_principal.php?&acao=0&solicitacao=' + id;  
        }  
    }  
</script>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>SMD</title>
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet" type="text/css" />
    </head>
    <body class="fundo">
        <?=$usuarioD->msg;?>
        <div name="conteudo" id="conteudo">
            
        </div>    
        <div class="hero-unit">
            <h1><br/>SEJA BEM-VINDO</h1>
            <p>
                Este é um sistema com o intuito de trazer um controle maior as contas feitas entre amigos! 
                Emprestou dinheiro? Cadastre aqui! Foi pago? Desconte aqui!
            </p>
        </div>
    </body>
</html>
