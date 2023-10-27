<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  Hola, estas realizando el tipo de cambio a
    <strong><?php echo $_GET['numero2']?></strong>
    y quieres cambiar 
    <strong><?php echo $_GET['numero1']?></strong>
    dolares, por tanto, el resultado es  <strong><?php echo $_GET['numero1'] * $_GET['numero2']?></strong> euros.
  
</body>
</html>