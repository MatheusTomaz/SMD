<html>
<head>
<title>Máscaras em JavaScript </title>

<script language="JavaScript" type="text/javascript">
    function mascaraData(campoData){
        var data = campoData.value;
        if (data.length == 2){
            data = data + '/';
            document.form.data.value = data;
            return true;
        }
        if (data.length == 5){
            data = data + '/';
            document.form.data.value = data;
            return true;
        }
    }
</script>
</head>
<body>

<form name="form">
Data:
<input type="text" name="data" OnKeyUp="mascaraData(this);" maxlength="10" />
<br>

</form>
</body>
</html>