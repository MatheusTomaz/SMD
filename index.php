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
        <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
    </head>
	<body style="overflow:hidden;" onResize=" frameResize(); " scroll=no >
 		<div style="height:30px; z-index:2; position:relative">
        	<? include("menu.php"); ?>
        </div>
        <div class="row" style="z-index:1;">
        	<div style="width:80%; padding:0 10% 0 10%;">
              	<IFRAME id="frame" src="SMD_principal.php" name="conteudo" width="100%" height="100%" scrolling="auto" frameborder="0"  align="center" >
                </IFRAME>
            </div>                
        </div>
        <script>
			frameResize();
		</script>
    </body>
</html>
