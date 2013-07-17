<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>SMD LogIn</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <script type='text/javascript' src='assets/bootstrap/jquery/jquery.js'></script>
    <script type='text/javascript' src='assets/bootstrap/jquery/jquery.form.js'></script>
    <link href="assets/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="assets/bootstrap/12093_128x128.png">
    
    <script type="text/javascript">
    // Quando carregado a pÃ¡gina
    $(function($) {
        // Quando enviado o formulÃ¡rio
        $('#frmLogin').submit(function() {
        // Limpando mensagem de erro
            $('div.mensagem-erro').html('');
            // Mostrando loader
            $('div.loader').show();
            // Enviando informaÃ§Ãµes do formulÃ¡rio via AJAX
            $(this).ajaxSubmit(function(resposta) {
                // Se nÃ£o retornado nenhum erro
                if (resposta == false)
                    // Redirecionando para o painel
                    window.location.href = 'usuario/principal.php';
                else
                {
                    // Encondendo loader
                    $('div.loader').hide();
                    // Exibimos a mensagem de erro
                    $('div.mensagem-erro').html(resposta);
                }
            });
            // Retornando false para que o formulÃ¡rio nÃ£o envie as informaÃ§Ãµes da forma convencional
            return false;
        });
    });
  </script>
  </head>

  <body>

    <div class="container">

      <form class="form-signin" id="frmLogin" action="handler/logarHandler.php" method="post">
        <h2 class="form-signin-heading">Entrar</h2>
        <div align="center" class="loader" style="display: none;"><img src="assets/bootstrap/img/loader.gif" alt="Carregando" /></div>
        <div class="mensagem-erro"></div>
        <br>
        <input type="text" class="input-block-level"  id="login" name="login" placeholder="Login">
        <input type="password" class="input-block-level"  id="senha" name="senha" placeholder="Senha">
        <button class="btn btn-large btn-primary" type="submit">Entrar</button>
      </form>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    
  </body>
</html>
