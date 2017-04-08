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
    $tipo_habitacion = $database->select("tb_habitaciones", "*");


    if($_POST){
      $database->insert("tb_reservaciones", [

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

    <title>RESERVACIONES</title>
  </head>
  <body>

    <form action="reservaciones.php" method="POST">
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
            <select name="id_habitacion" id="">

            <?php
                $len = count($tipo_habitacion);

                for($i=0; $i<$len; $i++){
                    echo "<option value='".$tipo_habitacion[$i]["id_habitacion"]."'>".$tipo_habitacion[$i]["nombre"]."</option>";
                    echo "$len";
                }
            ?>
            </select>
            </div>
        <div>
            <label for="">Total:   <p>Continuar para saber total</p></label>
            <input type="hidden" name="total">
        </div>

        <div>
            <input class="btn-submit" id="btn-submit" type="submit" value="Reservar">
        </div>

    </form>

  </body>
</html>
