<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambios horarios</title>
</head>
<body style="text-align:center; padding: 200px; background-color:beige;">
    <form action="horarios.php" method="post" name="form1">
        <label for="fecha">FECHA</label>
        <input type="text" name="fecha" id="fecha" style="border: 2px black solid; padding: 5px; margin: 10px;" placeholder="Formato: AAAA/MM/DD"> <br><br>
        <label for="hora">HORA</label>
        <input type="text" name="hora" id="hora" style="border: 2px black solid; padding: 5px; margin: 10px;" placeholder="Formato: HH:MM:SS"> <br> <br>
        <label for="operacion">Operación</label> 
        
        <input type="submit" name="button" id="button" value="ENVIAR" onclick="prueba" style="border: 2px black solid; padding:10px;"> <br><br>

    
    
    
    
    <?php
        if(isset($_POST["button"])){
            // Fecha y hora en UTC
            //$fecha_utc = '2024-08-04 12:34:56';
            $fecha_utc = $_POST["fecha"] . " " . $_POST["hora"];
            $operacion = $_POST["operacion"];

            // Crear un objeto DateTime en UTC
            $datetime = new DateTime($fecha_utc, new DateTimeZone('UTC'));

            // Convertir a la zona horaria de España (horario peninsular)
            $datetime->setTimezone(new DateTimeZone('Europe/Madrid'));

            // Mostrar la fecha y hora en la zona horaria española
            echo $datetime->format('Y-m-d H:i:s');



        }
        

        

    ?>
</body>
</html>