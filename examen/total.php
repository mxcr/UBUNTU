<?php
require  'medoo.php';

$database = new medoo([
	// required
	'database_type' => 'mysql',
	'database_name' => 'sistema',
	'server' => 'localhost',
	'username' => 'root',
	'password' => 'MXLORIA',
	'charset' => 'utf8',
 ]);

 $data = $database->select("tb_reservaciones","*");

 $tipo_habitacion = $database->select("tb_habitaciones", "*");

echo $tipo_habitacion["tb_habitaciones"]["nombre"];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Detalle de reservacion</title>
</head>
<body>


  <table class="tb_reporte">
		<tr>
      <th>Tipo de habitacion:</th>
      <th>Precio por adultos:  </th>
      <th>Precio por ninos:  </th>
    </tr>
		<?php
		$len = count($tipo_habitacion);
		for($i=0; $i<$len; $i++){
				echo"<tr>"."<td>".$tipo_habitacion[$i]["nombre"]."</td>"."<td>".$tipo_habitacion[$i]["precio_adulto"]."</td>"."<td>".$tipo_habitacion[$i]["precio_nino"]."</td>"."</tr>";
	 			}
		 ?>
		 <h1>
		 	Detalles de reservaciones
		</h1>
	</table>
<br/>
	<table>
	    <tr>
			<th>Nombre</th>
      <th>Apellidos</th>
      <th>Tipo de habitacion</th>
      <th>Total de adultos</th>
      <th>Total de ninos</th>
      <th>Total a pagar</th>
    </tr>

    <?php
    	$len=count($data);
    	for($i=0;$i<$len;$i++){
    	echo"<tr>"."<td>".$data[$i]["nombre"]."</td>"."<td>".$data[$i]["apellido"]."</td>"."<td>".$data[$i]["id_habitacion"]."</td>"
			."<td>".$data[$i]["cant_adultos"]."</td>"."<td>".$data[$i]["cant_ninos"]."</td>"."<td>".$data[$i]["total"]."</td>"."</tr>";
    	}
    	?>


</table>

</body>
</html>
