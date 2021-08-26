<?php
$servidor = 'localhost';
$usuario = 'id13672840_boingbypascual';
$contrasena = 'Acceso_abasededatos1';
$DB ='id13672840_db';
	
$idioma = 'es';
$conexion = mysqli_connect($servidor,$usuario,$contrasena);	
if($conexion){
	mysqli_select_db($conexion,$DB) or die(mysqli_error($conexion)); 
	
	$sql= "SELECT * FROM txtlogin WHERE lan='$idioma'";
	
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
		$content = $columnas['content'];
		$we = $columnas['we'];
		$pasc = $columnas['pasc'];
	}
}
?>
<html>
<head>
<title>Pascual Boing</title>
<link rel="stylesheet" type="text/css" href="../css/externo.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8"><!--son fundamentales pueda categorizar o posicionar en las busquedas-->
<meta charset="iso-8559-1"/><!--da una referencia a la busqueda-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="shortcut icon" href="../img/icon.ico"/>
<link rel="icon" href="../img/icon.ico"/>
</head>
<body>
  <a  href="../index.php">
  <img src="../img/Logo boing.png" width="250" height="125" align=Left alt="Unidos todo sabe mejor" title="Unidos todo sabe mejor">
  <img src="../img/pascual.png" width="250" height="125" align=Right alt="Unidos todo sabe mejor" title="Unidos todo sabe mejor">
  </a>
<ul>
  <li><a  href="../index.php"><?php echo $main ?></a></li>
  <li><a href="boing galeria.php"><?php echo $gal ?></a></li>
  <li><a  href="boing contacto.php"><?php echo $contact ?></a></li>
  <li><a href="boing sobre nosotros.php"><?php echo $about ?></a></li>
  <li><a  href="boing productos.php"><?php echo $prod ?></a></li>
  <li style="float:right"><a href="boing iniciar sesion.php"><?php echo $login ?></a></li>
</ul>

    <div class="login">
        <h2>Crear una cuenta de usuario</h2>
        <form name="signup" method="post" action="sign up.php" enctype="multipart/form-data">
            Nombre de usuario: <input type="text" method="post" name="usuario" placeholder="Nombre de usuario" required id="usuario"/>
            <br><br>
            Ingrese su contraseña: <input type="password" method="post" name="pass" placeholder="Contraseña" minlength="8" required id="pass"/>
			<br><br>
			Confirme su contraseña: <input type="password" method="post" name="confirm" placeholder="Contraseña (De nuevo)" minlength="8" required id="confirm"/>
			<br><br>
			Nombre(s): <input type="text" method="post" name="nombres" placeholder="Nombre(s)" required id="nombres"/>
            <br>
            <br>
            Apellidos: <input type="text" method="post" name="apellidos" placeholder="Apellidos"  required id="apellidos"/>
			<br><br>
			Foto: 
            <input type="file" method="GET" accept="image/*" name="fotos" required id="fotos"/>
            <br><br>			
        <button  name="button"  class="login">Registrarse</button>
        </form>
        <br>
    </div>

	    <div class="login">
        <h2>Create new user account</h2>
        <form name="signup" method="post" action="sign up.php" enctype="multipart/form-data">
            Username: <input type="text" method="post" name="usuario" placeholder="Username" required id="usuario"/>
            <br><br>
            Password: <input type="password" method="post" name="pass" placeholder="Password" minlength="8" required id="pass"/>
			<br><br>
			Confirm password: <input type="password" method="post" name="confirm" placeholder="Password (Again)" minlength="8" required id="confirm"/>
			<br><br>
			Name(s): <input type="text" method="post" name="nombres" placeholder="Name(s)" required id="nombres"/>
            <br>
            <br>
            Lastname: <input type="text" method="post" name="apellidos" placeholder="Lastname"  required id="apellidos"/>
			<br><br>
			Photo: 
            <input type="file" method="GET" accept="image/*" name="fotos" required id="fotos"/>
            <br><br>			
        <button  name="button"  class="login">Register</button>
        </form>
        <br>
			
<?php echo $content ?>
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