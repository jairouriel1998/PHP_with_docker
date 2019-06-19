<?php
// 1) Conexión
echo "<meta charset='utf-8'>";
echo "<style>

html{
  background-image: url(\"wall.jpg\");
  background-size: cover;
}

#component{
 background: #009FFF;  /* fallback for old browsers */
 background: -webkit-linear-gradient(to bottom, #ec2F4B, #009FFF);  /* Chrome 10-25, Safari 5.1-6 */
 background: linear-gradient(to bottom, #009FFF, #ec2F4B); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
 border-radius: 50px;
 width: 70%;
 padding: 40px;
 margin-top: 50px;
 color: white;
 opacity: 0.8;
}


#tablaCobro {
  font-family: \"Trebuchet MS\", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  color: white;
  background-color: darkviolet;
}

#tablaCobro td, #tablaCobro thead {
  border: 1px solid skyblue;
  padding: 8px;
}

#tablaCobro tr:nth-child(even){background-color: #E80A9B;}

#tablaCobro tr:hover {background-color: #A789F7; color: black; cursor: pointer;}

#tablaCobro thead {
  background: #7b4397;  /* fallback for old browsers */
  background: -webkit-linear-gradient(to top, #dc2430, #7b4397);  /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to top, #dc2430, #7b4397); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  /*background-color: #A10AE8;*/
  color: white;
}

.titulo{
 color: white;
 text-shadow: 3px 3px 5px #FF0FF0;
 font-size: 38px;
}	
</style>";
echo "<center><div id=\"component\"><br><br><h1 class=\"titulo\"><b><i>FACTURACION DE LA EMPRESA X</i></b><br><br></h1>";

if ($link = mysqli_connect("tut07-db", "root", "root_password")){

// 2) Preparar la orden SQL
if (!mysqli_select_db($link, "Facturaciondb")) {
    echo  "<p>Error al seleccionar la base de datos</p>";
}

$consulta= "SELECT * FROM CobroActual";

// 3) Ejecutar la orden y obtener datos
//mysql_select_db("Hello", $conexión);
$datos=mysqli_query ($link, $consulta);

// 4) Ir Imprimiendo las filas resultantes
echo "<table id=\"tablaCobro\"><thead><td>No</td><td>Nombre</td><td>Mes</td><td>Monto</td><td>Impuesto</td><td>Mora</td><td>Total</td><td>Pagado</td></thead>";
while ($fila =mysqli_fetch_array($datos)){
echo "<tr>";
echo "<td>";
echo $fila ["numero"];
echo  "</td>";
echo  "<td>";
echo  $fila["nombre"];
echo  "</td>";
echo  "<td>";
echo  $fila["mes"];
echo  "</td>";
echo  "<td>";
echo  $fila["monto"];
echo  "</td>";
echo  "<td>";
echo  $fila["impuesto"];
echo  "</td>";
echo  "<td>";
echo  $fila["mora"];
echo  "</td>";
echo  "<td>";
echo  $fila["total"];
echo  "</td>";
//pagado normal
/*
echo  "<td>";
echo  $fila["pagado"];
echo  "</td>";
*/
//pagado con validacion
echo  "<td>";
if ($fila["pagado"]==1) {
  echo "Sí";
}else{
  echo "No";
}
echo  "</td>";
echo "</tr>";
}
echo "</table>";
mysqli_free_result($datos);
}else{
  echo  "<p> MySQL no conoce ese usuario y password</p>";
}
echo "<br><br><h4> Made with ♥ by: Jairo Medrano :∧) </h4></div></center>";

?>
