<?php
$conn = require_once 'connect.php';

// Función para obtener usuarios y fecha de última conexión.
function obtenerUsuarios($conn) {
    $sql = "SELECT 
                U.Nombre AS NombreUsuario, 
                U.FechaUltimaConexion AS FechaConexion
            FROM licencias L
            INNER JOIN Usuarios U ON L.IdUsuarioCerco = U.Id";
    return $conn->query($sql)->fetch(PDO::FETCH_ASSOC);
}

// Función para eliminar Licencia
function eliminarLicencia($conn) {
    try{
        $sql = "DELETE FROM Licencias";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        echo "¡Licencias borradas correctamente!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

// Función para calcular el tiempo transcurrido entre dos fechas.
function calcularTiempoTranscurrido($fechaUltimaConexion) {
    $fechaInicio = new DateTime($fechaUltimaConexion);
    $fechaActual = new DateTime();

    // Calculamos la diferencia.
    $intervalo = $fechaActual->diff($fechaInicio);

    return [
        'dias' => $intervalo->days,
        'horas' => $intervalo->h,
        'minutos' => $intervalo->i
    ];
}

// Función para generar el texto del tiempo transcurrido.
function generarTextoTiempo($horas, $minutos) {
    $horaTexto = $horas === 1 ? "<b>1</b> hora y " : ($horas > 1 ? "<b>$horas</b> horas y " : "");
    $minutosTexto = $minutos === 1 ? "<b>1</b> minuto" : "<b>$minutos</b> minutos";
    return $horaTexto . $minutosTexto;
}

// Función para obtener la extensión según el usuario.
function obtenerExtension($usuarioWindows) {
    switch ($usuarioWindows) {
        case "Usuario2":
            return "555";
        case "Usuario":
            return "343";
        default:
            return null;
    }
}

// Obtener los datos del usuario actual.
$usuarioData = obtenerUsuarios($conn);
$usuarioWindows = $usuarioData['NombreUsuario'] ?? "";
$fechaUltimaConexion = $usuarioData['FechaConexion'] ?? "";

// Inicializar variables.
$horaTexto = $minutosTexto = "";

// Si hay un usuario conectado, calcular tiempo transcurrido.
if ($usuarioWindows) {
    $tiempo = calcularTiempoTranscurrido($fechaUltimaConexion);
    $horaTexto = generarTextoTiempo($tiempo['horas'], $tiempo['minutos']);
}

?>