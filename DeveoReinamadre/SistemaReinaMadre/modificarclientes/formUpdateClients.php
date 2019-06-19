<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
	<head>
		<title>Update Clients</title>
		<link rel="stylesheet" type="text/css" href="../styles/site.css" />
		<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	</head>
	<!--<body onLoad="javascript:enviarForm();"> este se comento por que ya no es en automatico el reenvio de este formulario-->
  <body>
		<!--<script language="javascript">
function enviarForm()
{
document.form1.submit();
}
</script>-->
		<center>Modificar Cliente<br><br>
	<form name='form1'  method="post" action="updateclients.php">
    Usuario:
		<input type="text" size="25" name="Username" value='Siteowner'/><br/><!--dueño del sitio  -->
    contraseña:
		<input type="text" size="25" name="Passwordw" value="apitest1234" /><br/><!-- password del dueño del sitio-->
		<input type="hidden" size="25" name="sName" value='ReinaMadre'/><br/><!-- apis keys pero del mindbody de desarrollo-->
		<input type="hidden" size="25" name="password" value='0XnBoIUIsi7e9XyNGlh3g7Rvkh8='/><!--password del mindbody de desarrollo -->
		<input type="hidden" size="5" name="siteID" value="296701"/><!-- site-->
		Ingresa Valor 1
		<input type="text"  name="v1"/><!-- site-->
		Ingresa Valor 2
		<input type="text"  name="v2"/><!-- site-->
		<br>
		<br>
		<br>
		<input type="submit" value="submit" name="submit"/>
	</form></center>
	</body>
</html>
