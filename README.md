# Drupal 9 Modulo Prueba

Versión Drupal: 9
PHP Version: 8.x

Descargar el repositorio y desde una terminal ejecutar:

composer install

La base de datos esta en la raíz del repositorio:

database-backup-12_30.sql

Crear la base de datos por medio de una interfaz como PHPMyAdmin:

db_claudiaestupinan_drupal

Crear un usuario en base de datos y dar privilegios para acceder a la base de datos db_claudiaestupinan_drupal

Configurar de acuerdo al tipo de servidor o maquina virtual que usa en ambiente local con host como:

http://claudiaestupinan-drupal.local

Virtualhost en local, apuntando al folder web:

<VirtualHost *:80>
    ServerAdmin admin@claudiaestupinan-drupal.local
    DocumentRoot "/usr/local/var/www/claudiaestupinan-drupal/web"
    ServerName claudiaestupinan-drupal.local
    ServerAlias claudiaestupinan-drupal.local *.claudiaestupinan-drupal.local
    RewriteEngine On
    RewriteOptions inherit
    CustomLog "/usr/local/var/www_logs/claudiaestupinan-drupal.local-error_log" combined
</VirtualHost>

Proceder a instalar por medio de http://claudiaestupinan-drupal.local/install.php

Seguir las instrucciones y asociar base de datos.
