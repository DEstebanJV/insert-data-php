<?php

include("conexion.php");
if (isset($_POST['register'])){

   

       $nombre = $_POST['nombre'];
       $apellido = $_POST['apellido'];
       $insertar = "INSERT INTO mitabla( nombre, apellido) VALUES ('$nombre','$apellido')";
       if ($mysqli->query($insertar) === TRUE) {
           echo "parce lo agregamos";
        } else {
            echo "Error: " . $sql . "<br>" . $mysqli->error;
        }
    
}