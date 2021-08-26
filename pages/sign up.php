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
	$_POST['confirm'];
	$_REQUEST['confirm'];
$confirmphp=$_POST['confirm'];
	$_POST['nombres'];
	$_REQUEST['nombres'];
$nombrephp=$_POST['nombres'];
	$_POST['apellidos'];
	$_REQUEST['apellidos'];
$apellidosphp=$_POST['apellidos'];


if(isset($_FILES['fotos'])){

	$imagen=$_FILES['fotos']['tmp_name'];
	$contenido=addslashes(file_get_contents($imagen));	
}



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
?>
	<script> window.location.replace('boing registro.php');
	alert("El nombre de usuario está repetido. Elija uno distinto") </script>
	
<?php
	}else{
	if ($passphp==$confirmphp)
	{
		echo"aqui va el insert<br />";
		mysqli_select_db($conexion,$DB) or die(mysqli_error($conexion)); 
		$sql2= "INSERT INTO personas(nombre,apellidos,usuario,pass,tipo,foto) VALUES ('$nombrephp','$apellidosphp','$usuariophp','$passphp','normal','$contenido')";
	 	echo $sql2;
		mysqli_query($conexion,$sql2);
?>
	<script> alert("El usuario: <?php echo $usuariophp ?> se ha creado y se ha iniciado sesion.")
	window.location.replace('signed up/index signed.php');
	 </script>
	
<?php	
	
	}else{ 
		echo"Datos erróneos";
?>
	<script> alert("Las contraseñas no coinciden.")
	window.history.go(-1);
	 </script>
	
<?php
	}
}
}else{		
?>
	<script> window.history.go(-1);
	alert("Introduzca una imagen por favor.") </script>
	
<?php
}
?>	
<body>
</body>
</html>