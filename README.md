# 🔑 ERPConnectionTracker

![GitHub last commit](https://img.shields.io/github/last-commit/21albertoff/ERPConnectionTracker?style=for-the-badge)![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white)![CSS3](https://img.shields.io/badge/css3-%231572B6.svg?style=for-the-badge&logo=css3&logoColor=white)![JavaScript](https://img.shields.io/badge/javascript-%23323330.svg?style=for-the-badge&logo=javascript&logoColor=%23F7DF1E)![HTML5](https://img.shields.io/badge/html5-%23E34F26.svg?style=for-the-badge&logo=html5&logoColor=white)

Este es un proyecto de aplicación web estática que muestra qué usuario está conectado actualmente en el sistema ERP, el cual tiene solo una licencia activa. Informa a los demás usuarios sobre quién está usando el sistema. Si no hay nadie conectado, indica que el sistema está disponible para su uso. Además, la aplicación cuenta con un modo oscuro que se activa automáticamente por la tarde.

## Características

- **Monitoreo de usuarios**: Muestra qué usuario está conectado en el sistema ERP.
- **Notificación de disponibilidad**: Si no hay ningún usuario conectado, el sistema indicará que está disponible para conexión.
- **Modo oscuro**: Cambia automáticamente a modo oscuro según la hora del día (por la tarde).
- **JS Nativo y Estilos Personalizados**: Desarrollado con JavaScript nativo, HTML y una guía de estilos propia.
- **Conexión PHP-PDO SQL Server**: Se utiliza PHP para establecer la conexión con la base de datos a través de `pdo_sql`.

## Requisitos

Para que la aplicación funcione correctamente, se deben cumplir los siguientes requisitos:

- **ODBC para SQL Server en PHP**: Asegúrate de tener los drivers ODBC apropiados instalados para SQL Server y compatibles con la versión de PHP que estés utilizando.
- **Servidor Web**: Cualquier servidor web como Apache o Nginx para servir los archivos estáticos y procesar los scripts PHP.

## Instalación y Configuración

1. Clona el repositorio:
   ```bash
   git clone https://github.com/21albertoff/ERPConnectionTracker.git
   ```

2. Navega a la carpeta del proyecto:
   ```bash
   cd ERPConnectionTracker
   ```
   
3. Actualiza la configuración de la base de datos:

> [!TIP]
> Abre el archivo `config.php` y modifica las credenciales de la base de datos según sea necesario. Asegúrate de que estos valores correspondan con la configuración de tu sistema ERP.
> 
   ```php
   <?php
      $db_server = 'TU_HOST_BD';
      $db_name = 'TU_NOMBRE_BD';
      $db_user = 'TU_USUARIO_BD';
      $db_password = 'TU_CONTRASEÑA_BD';
   ?>
   ```


4. Asegúrate de que los drivers ODBC de SQL Server están instalados correctamente en tu sistema y son compatibles con tu versión de PHP.

## Uso

1. Abre la aplicación en tu navegador. Automáticamente buscará la información en la base de datos y mostrará el usuario conectado.
2. Si no hay nadie conectado, aparecerá un mensaje indicando que el sistema está disponible.
3. Durante la tarde, el modo oscuro se activará automáticamente.
   
## Personalización

- **Estilos:** La aplicación utiliza una guía de estilos personalizada, ubicada en la carpeta `styles/`. Puedes modificar el archivo CSS para cambiar la apariencia de la aplicación. Tambien puedes modificar la imagen de la cabecera desde `resources\img\logo.png`
- **Horario del Modo Oscuro:** El modo oscuro es activado de forma automática según la hora. Si quieres ajustar el horario o personalizar este comportamiento, puedes modificar el JavaScript en `script.js`.

## Licencia

Este proyecto es de código abierto bajo la licencia MIT. Consulta el archivo ![LICENSE](https://github.com/21albertoff/ERPConnectionTracker/blob/main/LICENSE) para más detalles. 
¡Siéntete libre de contribuir a este proyecto o reportar cualquier problema que encuentres!




