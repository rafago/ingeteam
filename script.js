function insertUser() {
//Obtiene los valores de los elementos del index
var nombre = document.getElementById("Nombre").value;
var mail = document.getElementById("Mail").value;
var descripcion = document.getElementById("Descripcion").value;
var direccion = document.getElementById("Direccion").value;
var codigopostal = document.getElementById("CP").value;
var pass = document.getElementById("Password").value;



// Monta el string con los datos obtenidos
var dataString = 'nombre_usuario=' + nombre + '&mail=' + mail + '&descripcion=' 
					+ descripcion + '&direccion=' + direccion + '&codigopostal='
					+ codigopostal + '&pass=' + pass;
					
					
//Controla la correccion de los datos a introducir

	// Si todo OK ejecuta el fichero php
	$.ajax({
	type: "POST",
	url: "insertUser.php",
	data: dataString,
	cache: false,
	success: function(html) 
		{
		alert(html);
		}
	});
}

function insertTask() {
//Obtiene los valores de los elementos del index
var nombre = document.getElementById("Nombre").value;
var descripcion = document.getElementById("Descripcion").value;




// Monta el string con los datos obtenidos
var dataString = 'nombre_usuario=' + nombre + '&descripcion=' + descripcion ;
					
					
//Controla la correccion de los datos a introducir

	// Si todo OK ejecuta el fichero php
	$.ajax({
	type: "POST",
	url: "insertTarea.php",
	data: dataString,
	cache: false,
	success: function(html) 
		{
		alert(html);
		}
	});
}

