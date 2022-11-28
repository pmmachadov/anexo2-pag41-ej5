<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>anexo2-pag41-ej5</title>
</head>

<body>
    <?php require_once "./funlib.php"; ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);
    "funlib.php" ?>">
        <fieldset>
            <input type="text" name="num1" id="num1">
            <input type="text" name="num2" id="num2">
            <input type="submit" name="suma" value="Suma">
            <input type="submit" name="resta" value="Resta">
            <input type="submit" name="producto" value="Producto">
            <input type="submit" name="division" value="División">
        </fieldset>
    </form>
    