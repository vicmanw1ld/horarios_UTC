<style>
    body{
        text-align:center; 
        padding: 200px; 
        background-color:beige;"
    }
</style>


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

        echo "<h1>El día y la hora en España es: </h1>" . $datetime->format('Y-m-d H:i:s');



    }
        

        

?>