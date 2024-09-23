// Función para aplicar el modo oscuro o claro según la hora
function aplicarModoOscuro() {
    const horaActual = new Date().getHours();

    if (horaActual >= 18 || horaActual < 9) {
        document.body.classList.add('dark-mode');
    } else {
        document.body.classList.remove('dark-mode');
    }
}

// Ejecutamos la función al cargar la página
aplicarModoOscuro();


document.getElementById("borrarLicencias").addEventListener("click", function() {
    if (confirm("¿Estás seguro de que quieres borrar todas las licencias?")) {
        // Envía una solicitud HTTP a un archivo PHP para ejecutar el comando SQL
        fetch('app/controllers/deleteLicense.php')
        .then(response => response.text())
        .then(data => {
            alert(data); // Muestra el mensaje de la respuesta del servidor
            location.reload(); // Recarga la página después de ejecutar el comando SQL
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }
});