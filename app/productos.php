<?php
require 'database.php';

try {
    $stmt = $pdo->query("SELECT id, nombre, descripcion, precio FROM productos");
    $productos = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Error al obtener los productos: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technatura - Productes i solucions agraries</title>
    <style>
        body { font-family: sans-serif; margin: 20px; background-color: #f4f4f4; }
        h1 { color: #333; text-align: center; }
        .producto { border: 1px solid #ddd; padding: 15px; margin-bottom: 10px; background-color: white; }
        .producto h2 { margin-top: 0; color: #555; }
        .producto p { color: #777; }
        .precio { font-weight: bold; color: #007bff; }
    </style>
</head>
<body>
    <h1>Productes de Technatura</h1>
    <p>proba html, jenkins</p></b>
    <?php if (empty($productos)): ?>
        <p>No hay productos disponibles.</p>
    <?php else: ?>
        <?php foreach ($productos as $producto): ?>
            <div class="producto">
                <h2><?php echo htmlspecialchars($producto['nombre']); ?></h2>
                <p><?php echo htmlspecialchars($producto['descripcion']); ?></p>
                <p class="precio">Precio: $<?php echo htmlspecialchars($producto['precio']); ?></p>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</body>
</html>
