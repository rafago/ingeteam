<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <title>Ingeteam</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Importa los scripts necesarios -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<!-- Añade bordes a la tabla -->
        <style type="text/css">
        table, th, td {
         border: 1px solid black;
		 text-align:center;
        }
        </style>
    </head>
    <body>
        <div>
				<h1>Gestor de tareas</h1>
				<!-- Añade la linea horizontal -->	
				<hr/>
				<br><br><br>
				<form action="" method="post">
					<!-- Añade el checkbox PHP -->	
					<table id="tabla1" style="width: 50%" >
					<!-- Añade la fila de cabecera de la tabla -->	
					  <tr>
						<th>Tarea</th>
						<th>Descripcion</th>
						<th>Usuario</th>
					  </tr>
					  <tr>
					  <!-- Inicia codigo php -->	
					  <?php
						$mysqli = new mysqli('localhost', 'root', '', 'ingeteam');
						/* verificar la conexión */
						if (mysqli_connect_errno()) {
						printf("Conexión fallida: %s\n", mysqli_connect_error());
						exit();
						}
						$mysqli->set_charset("utf8");
						

						/*Consulta SQL*/
						$consulta = "SELECT * from `tasks`";
						$res2 = $mysqli->query($consulta);

					  ?>
					  <!-- Fin codigo php -->	
					  <!-- Mientras tenga informacion la consulta -->	
						<?php while($row = $res2->fetch_assoc()) {
							?>
						<!-- Crea nuevas filas -->	
						<td>
							<?php
							echo $row['Task_id'];
							?>
						</td>
						<td>
							<?php
							echo $row['Description'];
							?>
						</td>
						<td>
							<?php
							echo $row['User_name'];
							?>
						</td>
						</tr>
						<?php } ?>
					</table>
				</form>
				<!-- Añade saltos de linea -->	
				<br><br><br>
				<!-- Añade el boton Volver -->
				<input type="button" id="Inicio" value="VOLVER A INICIO" onclick="location='index.php'"/>
        </div>
    </body>
</html>
