<html>
<script>
// Se define una función llamada myfunction que se ejecutará cuando se haga clic en el botón
function myfunction() {
  // Se crea un nuevo objeto XMLHttpRequest (permite hacer peticiones HTTP sin recargar la página)
  const xhttp = new XMLHttpRequest();

  // Se configura la solicitud: método POST y archivo de destino "demo_ajax.php"
  xhttp.open("POST", "demo_ajax.php");

  // Se establece el encabezado HTTP para indicar el tipo de contenido enviado al servidor
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

  // Se define qué hacer cuando la respuesta del servidor haya llegado
  xhttp.onload = function() {
    // Inserta el texto de la respuesta del servidor dentro del elemento con id="demo"
    document.getElementById("demo").innerHTML = this.responseText;
  }

  // Envía la solicitud al servidor con un dato de ejemplo: fname=Mary
  xhttp.send("fname=Mary");
}
</script>

<body>
  <!-- Botón que ejecuta la función myfunction() al hacer clic -->
  <button onclick="myfunction()">Click me!</button>

  <!-- Elemento donde se mostrará la respuesta del servidor -->
  <h1 id="demo"></h1>
</body>
</html>
