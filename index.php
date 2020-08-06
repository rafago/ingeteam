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

    </head>
    <body>
        <div>
				<h1>Gestor de tareas</h1>
				<!-- Añade la linea horizontal -->	
				<hr/>
				<h3>Selecciona la opción deseada</h3>

				<!-- Añade el boton nuevo usuario -->
				<input type="button" id="newUser" value="Nuevo usuario" onclick="location='nuevoUsuario.php'"/>
				<!-- Añade el boton nuevo tarea -->	
				<input type="button" id="newTask" value="Nueva tarea" onclick="location='nuevaTarea.php'"/>
				<!-- Añade el boton consulta tareas -->	
				<input type="button" id="infoTasks" value="Consulta tareas" onclick="location='consultaTareas.php'"/>
				<!-- Añade saltos de linea -->	
				<br><br><br>
				
        </div>
    </body>
</html>
