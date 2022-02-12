<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link a Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilosGeneral.css">
    <title>Home</title>
</head>
<body>  
    <?php 
        include("conexion.php");        
    ?>
    <div class="navegacion">
        <nav class="nav nav-pills nav-justified">
            <a class="nav-link active" href="index.php">Inicio</a>
            <a class="nav-link" href="formulario.php">Formulario</a>       
        </nav>
    </div>
    <div class="cuerpo">
        <h3> Información de las personas </h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Ciudad</th>
                </tr>
            </thead>
            <tbody>                
                <?php 
                    //Obtener informacion de la BD
                    $stmt = $conn->prepare("SELECT * FROM persona;");                                        
                    $stmt->execute();                    
                    //Obtener la info como un arreglo
                    $stmt->setFetchMode(PDO::FETCH_ASSOC);                                                        
                    foreach ($stmt->fetchAll() as $row) {
                        echo "  
                                <tr>
                                    <th>" . $row['id_persona'] . "</th>
                                    <th>" . $row['nombre'] . "</th>
                                    <th>" . $row['apellido'] ."</th>
                                    <th>" . $row['edad'] ."</th>
                                    <th>" . $row['ciudad'] ."</th>  
                                </tr>                              
                        ";
                    }   
                    
                    $conn = null;
                ?>
            </tbody>
        </table>       
    </div>
    <!-- Links de Bootstrap para JS-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>