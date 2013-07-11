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
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>SMD</title>
        <link href="css/SMD_css.css" rel="stylesheet" type="text/css" />
    </head>
	<body style="overflow:hidden;" onResize=" frameResize(); " scroll=no >
 		<div align="center">
        	<div class="corp">
            	<div class="topo">
                	<? include("topo.php"); ?>
                </div>
                <div class="menu">
                	<? include("menu.php"); ?>
                </div>
                <div class="conteudo">
                	<IFRAME id="frame" src="SMD_principal.php" name="conteudo" width="100%" height="100%" scrolling="auto" frameborder="0"  align="center" >
                    </IFRAME>
                </div>                
                <div class="rodape">
                    <?php include 'rodape.php'?>
                </div>
            </div>
        </div>
        <script>
			frameResize();
		</script>
    </body>
</html>
