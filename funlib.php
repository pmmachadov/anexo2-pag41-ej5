<?php
if (isset($_POST['suma'])) {
    if (empty($_POST['num1']) || empty($_POST['num2'])) {
        echo "Alguno de los valores introducidos esta vacío" . "<br>";
    } elseif (!is_numeric($_POST['num1']) || !is_numeric($_POST['num2'])) {
        echo "Alguno de los valores introducidos no es un número" . "<br>";
    } else {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $suma =  (int)$num1 + (int)$num2;
        echo "La suma de los dos números es: " . $suma . "<br>";
    }
}

if (isset($_POST['resta'])) {
    if (empty($_POST['num1']) || empty($_POST['num2'])) {
        echo "Alguno de los valores introducidos esta vacío" . "<br>";
    } elseif (!is_numeric($_POST['num1']) || !is_numeric($_POST['num2'])) {
        echo "Alguno de los valores introducidos no es un número" . "<br>";
    }
} else {
    $num1 = $_POST['num1'] ?? 0;
    $num2 = $_POST['num2'] ?? 0;
    $resta = (int)$num1 - (int)$num2;
    echo "La resta de $num1 y $num2 es $resta" . "<br>";
}
if (isset($_POST['producto'])) {
} elseif (empty($_POST['num1'] ?? 0 ) || empty($_POST['num2'] ?? 0 )) {
    echo "Alguno de los valores introducidos esta vacío";
    } elseif (!is_numeric($_POST['num1']) || !is_numeric($_POST['num2'])) {
        echo "Alguno de los valores introducidos no es un número" . "<br>";
    } else {
    $num1 = $_POST['num1'] ?? 0;
    $num2 = $_POST['num2'] ?? 0;
    $producto = (int)$num1 * (int)$num2;
    echo "El producto de $num1 y $num2 es $producto" . "<br>";
}

if (isset($_POST['division'])) {
    if ($_POST['num2'] == 0) {
        echo "No se puede dividir entre 0";
    } elseif (!is_numeric($_POST['num1']) || !is_numeric($_POST['num2'])) {
        echo "Alguno de los valores introducidos no es un número";
    } elseif (empty($_POST['num1']) || empty($_POST['num2'])) {
        echo "Alguno de los valores introducidos esta vacío" . "<br>";
    } elseif (preg_match("/^[0-9]/", $num1) || preg_match("/^[0-9]/", $num2)) {
        echo "Alguno de los valores introducidos no es un número" . "<br>";
    } else {
            $num1 = $_POST['num1'] ?? 0;
            $num2 = $_POST['num2'] ?? 0;
            $division = (int)$num1 / (int)$num2;
            echo "La división de $num1 y $num2 es $division" . "<br>";
        }
    }
?>