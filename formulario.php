<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link a Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilosGeneral.css">
    <title>Formulario</title>
</head>
<body>
    <div class="navegacion">
        <!-- Inicio del nav-->
        <nav class="nav nav-pills nav-justified">
            <a class="nav-link" href="index.php">Inicio</a>
            <a class="nav-link active" href="formulario.php">Formulario</a>       
        </nav>
        <!--Final del nav-->
    </div>
    <div class="cuerpo">
        <!-- Inicio del form -->
        <h3> Formulario </h3>
        <form class="form" action="store.php" method="post">
            <div class="form-group row">
                <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="apellido" class="col-sm-2 col-form-label">Apellido</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="apellido" placeholder="Apellido" name="apellido">
                </div>
            </div> 
            <div class="form-group row">
                <label for="edad" class="col-sm-2 col-form-label">Edad</label>
                <div class="col-sm-10">
                <input type="number" class="form-control" id="edad" placeholder="Edad" name="edad" required min="1" max="110">
                </div>
            </div>   
            <div class="form-group row">
                <label for="ciudades" class="col-sm-2 col-form-label">Ciudad</label>
                <div class="col-sm-10">
                    <select class="custom-select" name="ciudad" id="ciudad">
                        <option value="Jalisco">Jalisco</option>
                        <option value="Monterrey">Monterrey</option>
                        <option value="CDMX">Ciudad de México</option>
                        <option value="Puebla">Puebla</option>
                    </select>
                </div>
            </div>                         
            <div class="form-group row">
                <div class="col-sm-12">
                <button type="submit" class="btn btn-primary btn-block"> Enviar </button>
                </div>
            </div>
        </form>    
        <!-- Final del form-->
    </div>
    <!-- Links de Bootstrap para JS-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>