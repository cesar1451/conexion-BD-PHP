<?php 
    include("conexion.php");
    
    //Obtención de variables 
    if(count($_POST) > 0){
        $nombre = $_POST['nombre'];  
        $apellido = $_POST['apellido'];
        $edad = $_POST['edad'];
        $ciudad = $_POST['ciudad']; 

        //Realizar INSERT
        $sql = "INSERT INTO persona (nombre, apellido, edad, ciudad) VALUES ('$nombre', '$apellido', $edad, '$ciudad')";      
        $conn->exec($sql);
        echo "Datos insertados correctamente";
    }else{
        echo "No hay información enviada";
    }  
    
    //Cerrando instancia de la BD
    $conn = null;
  
    //Redireccionar a la pagina index
    header('Location: index.php');

?>