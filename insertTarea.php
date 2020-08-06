
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
 $descripcion = $_POST['descripcion'];

 
  
 
 /*Obtiene el id del usuario dueño de la tarea*/
 $sqlSelect = "SELECT * FROM `user` WHERE Name = '$nombre_usuario'";
 $res = mysqli_query($con, $sqlSelect );
 /*Si el usuario no existe devuelve error*/
 if ($res->num_rows < 1){
	echo "El usuario no existe";}
 else {
	 	 	
	 /*Calula el id de tarea*/
	$res2 = mysqli_query($con, "SELECT * FROM `tasks`");
	$id_tarea = $res2->num_rows + 1;
	 
	 /*inserta la tarea*/
	$sql = "insert into `tasks` (Task_id, User_name, Description) 
				values ('$id_tarea', '$nombre_usuario', '$descripcion')";
				
	if(!mysqli_query($con, $sql)){
		echo error;
	}else echo 'Insert realizado correctamente';
 }
 ?>