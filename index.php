
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Alberto Fuentes">
    <meta name="description" content="Controlodor de licencias activas en ERPHispatec">
    <meta name="theme-color" content="#2e666a">
    <link rel="icon" href="resources/img/favicon.webp" sizes="32x32">
    <meta http-equiv="refresh" content="30">
    <title>Acceso ERP Hispatec</title>

    <link rel="stylesheet" href="resources/css/styles.css">

</head>
<body>

<?php 
include_once __DIR__ . '/App/Controllers/controlador.php';
?>

    <!-- Cabecera con imagen -->
    <header>
        <img src="resources/img/logo.png" alt="Cabecera">
    </header>

    <!-- Contenido principal -->
    <main>
        <?php if ($usuarioWindows) { ?>
            <p class="active-small-text">Por favor, pongase en contacto con este usuario para coordinar la conexión de acceso.</p>
            <p class="active-medium-text">Usuario utilizando ERP:  
                <span class="usuario">
                        <?php echo $usuarioWindows === "Usuario" ? "Informática" : $usuarioWindows; ?>
                </span>
        </p>
            <?php
                // Mostrar la extensión si corresponde.
                $extension = obtenerExtension($usuarioWindows);
                if ($extension) {
                    echo "<h1>Extensión: <b class='usuario'>$extension</b></h1>";
                }
            ?>
            <p class="time-text">Tiempo transcurrido: <span class="minutos"><?= $horaTexto ?></span></p>
        <?php } else { ?>
            <p class="small-text">No hay ningún usuario utilizando el ERP.</p>
            <p class="enter-text">PUEDES ENTRAR</p>
        <?php } ?>
    </main>

    <!-- Pie de página -->
    <footer>
        <p id="borrarLicencias">🐿️ Por cortesía del Dpto. IT</p>
    </footer>

    <script src="resources/js/script.js"></script>

</body>
</html>
