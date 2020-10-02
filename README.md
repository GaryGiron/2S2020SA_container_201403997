# Practica 8
## Contenedores: conceptos, Docker, docker compose
Esta practica se basa en levantar un contenedor que tenga en su interior una aplicacion web que se pueda conectar a una base de datos con informacion ingresada previamente.

## Servicios

### Web
- Este es un servicio que se basa en apache y php para el funcionamiento de la aplicacion donde se corre sobre el puerto 80
- Se hace un mapeo de volumenes para poder insertar desde la consola del servidor donde se esta corriendo el contenedor los archivos del /var/www/html

### mysql
- La base de datos se instala como otro servicio independiente que corre aparte del web
- Se confirgura el entorno de desarrollo con los usuarios y contraseñas que este necesita.

## Aplicacion
Esta hecha unicamente en php y la vista html, es una pagina sencilla que su unica funcionalidad es mostrar una tabla de datos de clientes ingresados a base de datos previamente

## Autor
Gary Stephen Giron Molina
Carnet: 201403997
