<html>
<head>
</head>
<?php
	$_POST['usuario'];
	$_REQUEST['usuario'];
$usuariophp=$_POST['usuario'];
	$_POST['pass'];
	$_REQUEST['pass'];
$passphp=$_POST['pass'];

	
$servidor = 'localhost';
$usuario = 'id13672840_boingbypascual';
$contrasena = 'Acceso_abasededatos1';
$DB ='id13672840_db';
	
$conexion = mysqli_connect($servidor,$usuario,$contrasena);	
if($conexion){
	echo "Conexion realizada <br />";
	mysqli_select_db($conexion,$DB) or die(mysqli_error($conexion)); 
	
	$sql= "SELECT * FROM personas WHERE usuario='$usuariophp'";
	
	$aqui=mysqli_query($conexion,$sql);
	$checar=mysqli_query($conexion,$sql);
	$num=0;
	
	while ($columnas=mysqli_fetch_array($checar))
	{
		$num++;
	}
	if ($num>0){
	while ($columnas=mysqli_fetch_array($aqui)){
		$id = $columnas['id'];
		$nombredeusuario = $columnas['usuario'];
		$nombre = $columnas['nombre'];
		$apellidos = $columnas['apellidos'];
		$pass = $columnas['pass'];
		$tipo = $columnas['tipo'];
	}
	

	if ($passphp==$pass && $usuariophp==$nombredeusuario)
	{
		echo "El usuario es: ".$nombredeusuario."<br /> Que corresponde a: ".$nombre." ".$apellidos."<br /> Con la pass: ".$pass; 
?>
	<script> window.location.replace('signed up/index signed.php');
	alert("Ha iniciado sesión con el usuario: <?php echo $usuariophp ?>") </script>
	
<?php
	}else{ 
		echo"Datos erróneos";
		?>
	<script> window.location.replace('boing iniciar sesion.php');
	alert("La contraseña es incorrecta.") </script>
	
<?php
	}
}else{ echo"Datos erróneos";
?>
	<script> window.location.replace('boing iniciar sesion.php');
	alert("El usuario <?php echo $usuariophp ?> no se ha encontrado.") </script>
	
<?php
	 }
}
?>	
<body>
</body>
</html>