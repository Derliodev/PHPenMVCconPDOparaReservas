<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="views/css/style.css?v=1">
    <title>Fomrulario Reservas</title>
</head>
<body>
    <div class="main">    
        <h1>Haz tu reserva</h1>
        <div class="form">
            <div>
                <label for="Rut">Rut</label><br>
                <label for="Nombre">Nombre</label>
            </div>
            <div class="inp">
                <form action="index.php" method="post">
                    <input type="text" name="Rut" required><br>
                    <input type="text" name="Nombre" required><br><br>
                    <input class="boton" type="submit" value="Reservar">
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>