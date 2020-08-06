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
		<!-- Importa el script para añadir -->
		<script src="script.js"></script>
		<!-- Añade bordes a la tabla -->
        <style type="text/css">
        table, th, td {
         border: 1px solid black;
        }
        </style>
    </head>
    <body>
        <div>
				<h1>Gestor de tareas</h1>
				<!-- Añade la linea horizontal -->	
				<hr/>
				<h3>Añadir nuevo usuario</h3>
				<!-- Añade el cuadro de texto para nombre -->
				<input type="text" id="Nombre" value="Nombre..." pattern="[a-zA-Z]{1,15}">
				<br>
				<!-- Añade el cuadro de texto para Mail -->
				<input type="email" id="Mail" value="Mail..." name="Mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
				<br>
				<!-- Añade el cuadro de texto para descripcion -->
				<input type="text" id="Descripcion" value="Descripcion...">
				<br>
				<!-- Añade el cuadro de texto para direccion -->
				<input type="text" id="Direccion" value="Direccion...">
				<br>
				<!-- Añade el cuadro de texto para CP -->
				<input type="text" id="CP" value="Codigo Postal...">
				<br>
				<!-- Añade el cuadro de texto para password -->
				<input type="text" id="Password" value="Contraseña...">
				<br><br><br>
				<!-- Añade el boton añadir -->	
				<input type="button" id="add" onclick="insertUser()" value="Añadir">
				<!-- Añade saltos de linea -->	
				<br><br><br>
				
				<!-- Añade el boton Volver -->
				<input type="button" id="Inicio" value="VOLVER A INICIO" onclick="location='index.php'"/>
        </div>
    </body>
</html>
