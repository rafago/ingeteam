
<?php
 /*Conecta a BBDD*/
 define('HOST','localhost');
 define('USERNAME', 'root');
 define('PASSWORD','');
 define('DB','ingeteam');
 $con = mysqli_connect(HOST,USERNAME,PASSWORD,DB);
 

 $contador = 0;
/*Obtiene los valores del index por el metodo POST*/
 $nombre_usuario = $_POST['nombre_usuario'];
 $mail = $_POST['mail'];
 $descripcion = $_POST['descripcion'];
 $direccion = $_POST['direccion'];
 $CP = $_POST['codigopostal'];
 $pass = $_POST['pass'];
 
 /*Comprueba que el nombre de usuario solo tenga letras*/
 if(ctype_alpha($nombre_usuario) == FALSE){
	echo "El nombre solo puede contener letras";
	exit;
 };
 /*Comprueba el correcto formato del mail*/
 if (filter_var($mail, FILTER_VALIDATE_EMAIL) == FALSE){
	echo "El mail debe tener formato XXXXX@XXXX.XXX";
	exit;
 };
  
 
 /*Obtiene el id del nuevo usuario insertado*/
 $res = mysqli_query($con, "SELECT * FROM `user`");
	$id_usuario = $res->num_rows + 1;
	
 /*inserta el usuario*/
$sql = "insert into `user` (Name, Mail, Description, Address, CP, Password, User_id) 
			values ('$nombre_usuario', '$mail', '$descripcion', '$direccion', '$CP', AES_ENCRYPT('$pass','password'), '$id_usuario')";
if(!mysqli_query($con, $sql)){
	echo error;
}else echo 'Insert realizado correctamente';
 ?>