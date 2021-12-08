<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloc de Notas</title>
</head>
<body>
    
    <form action="creararchivo.php" method="post">
    
        <center>Asunto:<br><input type="text" name="asunto"><br><br></center>
        
        <center>Descripcion: <br><textarea name="descripcion" rows="20" cols="70"></textarea><br><br></center>
        <center><input type="submit" name="btn" value="Crear Archivo .txt"></center>
        
    </form>

</body>
</html>
