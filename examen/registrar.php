<?php

	require  'medoo.php';

    $database = new medoo([
        // required
        'database_type' => 'mysql',
        'database_name' => 'sistema',
        'server' => 'localhost',
        'username' => 'root',
       'password' => 'MXLORIA',
        'charset' => 'utf8'
    ]);
		$data = $database->select("tb_reservaciones","*");

	  $tipo_habitacion = $database->select("tb_habitaciones", "*");
		}

    if($_POST){
      $database->update("tb_reservaciones", [

        "nombre" => $_POST["nombre"],
        "apellido" => $_POST["apellido"],
        "id_habitacion" => $_POST["id_habitacion"],
        "cant_adultos" => $_POST["cant_adultos"],
        "cant_ninos" => $_POST["cant_ninos"],
        "total"=> $_POST["total"]

      ]);
    }


 ?>

<html>
  <head>

    <title>Confirnar registro</title>
  </head>
  <body>

    <form action="registrar.php" method="POST">
<h1>Reserve sus vacaciones ahora!!</h1>
        <div>
            <label for="">Nombre</label>
            <input type="text" name="nombre">
        </div>
        <div>
            <label for="">Apellidos</label>
            <input name="apellido">
        </div>
        <div>
            <label for="">Cantidad de adultos</label>
            <input type="text" name="cant_adultos">
        </div>
        <div>
            <label for="">Cantidad de ninos</label>
            <input type="text" name="cant_ninos">
        </div>


        <div>
            <label for="">Tipo de habitacion</label>
            <input type="text" name="id_habitacion">
            </div>
        <div>
            <label for="">Total: </label>
            <input type="text" name="total">
        </div>

        <div>
            <input class="btn-submit" id="btn-submit" type="submit" value="0">
        </div>

    </form>

  </body>
</html>
