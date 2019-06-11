<?php
// 1) Conexión
echo "<meta charset='utf-8'>";
echo "<style>td{ padding-left: 15px;  padding-right: 15px; border: solid 1px green; color: white; font-size: 18px; } html{  background-color: black; color: white; }</style>";
echo "<center><br><br><h1>Sistema de facturación X<br><br></h1>";

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
echo "<table><thead><td>No</td><td>Nombre</td><td>Mes</td><td>Monto</td><td>Impuesto</td><td>Mora</td><td>Total</td><td>Pagado</td></thead>";
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
echo "<br><br><p>Creado por: Jairo Medrano</p></center>";

?>
