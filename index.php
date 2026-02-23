<!-- index.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Blackut</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/hero.css">
    <link rel="stylesheet" href="css/servicios.css">
    <link rel="stylesheet" href="css/equipo.css">
    <link rel="stylesheet" href="css/peinados.css">
    <link rel="stylesheet" href="css/testimonios.css">
    <link rel="stylesheet" href="css/contacto.css">
    <link rel="stylesheet" href="css/reserva.css">
    <link rel="stylesheet" href="css/footer.css">


</head>
<body>

<?php include 'templates/navbar.php'; ?>

<!-- Contenido principal -->
<div class="contenido">
    <!-- Sección de bienvenida profesional -->
    <?php include 'templates/hero.php'; ?>
    <!-- Sección de Servicios -->
    <?php include 'templates/servicios.php'; ?>
    <!-- Sección de Equipo -->
    <?php include 'templates/equipo.php'; ?>

    <!-- Sección de Peinados -->
    <?php include 'templates/peinados.php'; ?>
    <!-- Sección de Testimonios -->
    <?php include 'templates/testimonios.php'; ?>

    <!-- Sección de Contacto -->
    <?php include 'templates/contacto.php'; ?>

    <!-- Sección de Reserva -->
    <?php include 'templates/reserva.php'; ?>
    <!-- Footer -->
    <?php include 'templates/footer.php'; ?>

</div>

</body>
</html>
