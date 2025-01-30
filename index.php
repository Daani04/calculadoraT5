<?php
require 'Calculadora.php'; 

use App\Calculadora;

$calc = new Calculadora();
$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = isset($_POST['num1']) ? floatval($_POST['num1']) : 0;
    $num2 = isset($_POST['num2']) ? floatval($_POST['num2']) : 0;
    $operacion = $_POST['operacion'];

    switch ($operacion) {
        case "suma":
            $resultado = $calc->suma($num1, $num2);
            break;
        case "resta":
            $resultado = $calc->resta($num1, $num2);
            break;
        case "multi":
            $resultado = $calc->multi($num1, $num2);
            break;
        case "divi":
            $resultado = ($num2 != 0) ? $calc->divi($num1, $num2) : "Error: División por cero";
            break;
        case "raiz":
            $resultado = ($num1 >= 0) ? $calc->raiz($num1) : "Error: No se puede calcular raíz de número negativo";
            break;
        default:
            $resultado = "Operación no válidsa.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h2>Calculadora en PHP</h2>
    <form method="post">
        <label for="num1">Número 1:</label>
        <input type="number" step="any" name="num1" required>
        
        <label for="num2">Número 2 (opcional si es raíz):</label>
        <input type="number" step="any" name="num2">

        <label for="operacion">Operación:</label>
        <select name="operacion" required>
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multi">Multiplicación</option>
            <option value="divi">División</option>
            <option value="raiz">Raíz cuadrada (solo usa Número 1)</option>
        </select>

        <button type="submit">Calcular</button>
    </form>

    <?php if ($resultado !== ""): ?>
        <h3>Resultado: <?= $resultado; ?></h3>
    <?php endif; ?>
</body>
</html>
