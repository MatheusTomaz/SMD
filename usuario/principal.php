<?php
    require_once('../assets/config/conn.php');
    
    $objLogin = new Login();

    if (!$objLogin->verificar('../index.php'))
        exit;

    $query = mysql_query("SELECT * FROM usuario WHERE cod_usuario = {$objLogin->getID()}");
    $usuario = mysql_fetch_object($query);
?>
<!DOCTYPE html>
<html>
    <script>
        function frameResize(){
            altura=document.documentElement.clientHeight-10;
            if (altura<200)
                altura=200;
            document.getElementById('frame').style.height = (altura) + "px";
        }
    </script>
    <head>
        <meta http-equiv="Content-Type" name="viewport" content="width=device-width, initial-scale=1.0; text/html; charset=utf-8">
        <title>SMD</title>
       	<link href="../assets/bootstrap/css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
    </head>
    <body style="overflow:hidden;" onResize=" frameResize(); " scroll=no >
        <div style="height:30px; z-index:2; position:relative;">
            <? include("../assets/menu.php"); ?>
        </div>
        <div class="row" style="z-index:1; padding: 0 10% 0 10%;">
            <IFRAME id="frame" src="../assets/smd_principal.php" name="frame" width="100%" height="100%" scrolling="auto" frameborder="0"  align="center" >
            </IFRAME>
        </div>
        <script>
            frameResize();
        </script>
    </body>
</html>
