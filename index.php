<?php
$servidor = 'localhost';
$usuario = 'id13672840_boingbypascual';
$contrasena = 'Acceso_abasededatos1';
$DB ='id13672840_db';
	
$idioma = 'es';
$conexion = mysqli_connect($servidor,$usuario,$contrasena);	
if($conexion){
	mysqli_select_db($conexion,$DB) or die(mysqli_error($conexion)); 
	
	$sql= "SELECT * FROM txtmenu WHERE lan='$idioma'";
	
	$aqui=mysqli_query($conexion,$sql);
	
	while ($columnas=mysqli_fetch_array($aqui)){
		$id = $columnas['id'];
		$lan = $columnas['lan'];
		$main = $columnas['main'];
		$gal = $columnas['gal'];
		$contact = $columnas['contact'];
		$about = $columnas['about'];
		$prod = $columnas['prod'];
		$login = $columnas['login'];
		$tog = $columnas['tog'];
		$content = $columnas['content'];
		$vids = $columnas['vids'];
		$we = $columnas['we'];
		$pasc = $columnas['pasc'];
	}
}
?>
<html>
<head>
<title>Pascual Boing</title>
<link rel="stylesheet" type="text/css" href="css/externo.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="google" value="notranslate" /> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="shortcut icon" href="img/icon.ico"/>
<link rel="icon" href="img/icon.ico"/>
</head>
<body>
	<a  href="index.php">
	<img src="img/Logo boing.png" width="250" height="125" align=Left alt="Unidos todo sabe mejor" title="Unidos todo sabe mejor">
	<img src="img/pascual.png" width="250" height="125" align=Right alt="Unidos todo sabe mejor" title="Unidos todo sabe mejor">
	</a> 
<ul>
  <li><a class="active" href="index.php"><?php echo $main ?></a></li>
  <li><a href="pages/boing galeria.php"><?php echo $gal ?></a></li>
  <li><a href="pages/boing contacto.php"><?php echo $contact ?></a></li>
  <li><a href="pages/boing sobre nosotros.php"><?php echo $about ?></a></li>
   <li><a href="pages/boing productos.php"><?php echo $prod ?></a></li>
  <li style="float:right"><a href="pages/boing iniciar sesion.php"><?php echo $login ?></a></li>
</ul>
<h1><?php echo $tog ?></h1>
 	<p class="nature">
 		<img class="imgtext" src="https://www.pascual.com.mx/wp-content/uploads/2019/05/imagen-mexico-pascual1.png" width="400" height="344" align=right alt="Unidos todo sabe mejor" title="Unidos todo sabe mejor">
 		<b><?php echo $content ?> </b>
	</p>
	<div class="warm">
<h1><?php echo $vids ?></h1>
<iframe class="tscplayer_inline" id="embeddedSmartPlayerInstance" src="pages/Play comercial/campo/comercial_player.html?embedIFrameId=embeddedSmartPlayerInstance" scrolling="no" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
	<br>
  <br>	
<iframe class="tscplayer_inline" id="embeddedSmartPlayerInstance" src="pages/Play comercial/latas/comercial boing latas_player.html?embedIFrameId=embeddedSmartPlayerInstance" scrolling="no" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>

  </div>
	<p class="bottom">
		<img src="https://www.pascual.com.mx/wp-content/uploads/2019/04/LOGO-PASCUAL-150x150.png" width="150" height="150" align=center alt="Sociedad Cooperativa Trabajadores de Pascual" title="Sociedad Cooperativa Trabajadores de Pascual">
	<?php echo $we ?> 
	<br>
	<br>
	<?php echo $pasc ?>
	<br>
	</p>

</body>
</html>