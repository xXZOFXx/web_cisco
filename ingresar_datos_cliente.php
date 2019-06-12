<?php
	
	//Proceso de conexión con la base de datos
	include("conexion.php");
	//Iniciar Sesión
	session_start();
			
	$nombre = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];
	$empresa = $_POST['empresa'];
	$correo = $_POST['correo'];
	$telefono = $_POST['telefono'];
	$pais = $_POST['pais'];
	$comentarios = $_POST['comentarios'];

	echo $nombre."<br>";
	echo $apellidos."<br>";
	echo $empresa."<br>";
	echo $correo."<br>";
	echo $telefono."<br>";
	echo $pais."<br>";
	echo $comentarios."<br>";
	
	
	/*$query = mysql_query('SELECT ID FROM datos WHERE ID = "'.$user_id.'"');
				
	if ($exists = mysql_fetch_object($query))
	{
		echo '<script language = javascript>
			alert("Usted ya se habia registrado sus datos personales anteriormente.")
			self.location = "ingresar_datos.php"
			</script>';
	}
	else {
		$insert = mysql_query("INSERT INTO datos (ID, nombre, apellidopaterno, apellidomaterno, depto, sni, sei, paginaweb, correo, telefono) VALUES ('$user_id', '$nombre', '$apellidopaterno', '$apellidomaterno', '$depto', '$sni', '$sei', '$pp', '$correo', '$telefono')");
					
		if ($insert)
		{
			echo '<script language = javascript>
			alert("Se ha guardado exitosamente sus datos personales.")
			self.location = "sesion.php"
			</script>';
		}
		else{
			echo '<script language = javascript>
			alert("Hubo un error sus datos personales. Favor de intentarlo de nuevo.")
			self.location = "ingresar_datos.php"
			</script>';
		}
	}*/
	sqlsrv_close( $conn );
?>