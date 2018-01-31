#!/bin/bash

#Actualizamos la máquina
apt-get update 

#Instalamos el nginx
apt-get install -y nginx
    #Herramienta de Descompresion de archivos
apt-get install -y unzip

#instalamos paquete para Soportar PHP
apt-get install -y php-fpm php-mysql

#Configuramos PhP para nginx
sed -i "s/;cgi.fix_pathinfo=1/cgi.fix_pathinfo=0/" /etc/php/7.0/fpm/php.ini

#Reiniciamos el servicio php
systemctl restart php7.0-fpm

#Copiamos el archivo en la maquina Real a la Máquina virtual
cp /vagrant/config/nginx.default /etc/nginx/sites-available/default

#Copia el archivo info.php
cp /vagrant/config/info.php /var/www/html
systemctl reload nginx

# WORDPRESS
cd /var/www/html
rm -f latest.zip
wget https://wordpress.org/latest.zip
unzip -o latest.zip

# Configure Wordpress to connect with MySQL
cd wordpress
cp wp-config-sample.php wp-config.php

#Variables
DB_WP_NAME=wordpress
DB_WP_USER=wp_user;
DB_WP_PASSWORD=wp_password;
DB_HOST=192.168.33.11

#el dolar da significado a la ruta, es decir, DB_WP_NAME se cambia por wordpress
sed -i -e "s/database_name_here/$DB_WP_NAME/" wp-config.php
sed -i -e "s/username_here/$DB_WP_USER/" wp-config.php
sed -i -e "s/password_here/$DB_WP_PASSWORD/" wp-config.php
sed -i -e "s/localhost/$DB_HOST/" wp-config.php

#Configure WP_home and WP_Siteurl
echo "define('WP_HOME','http://192.168.33.10/wordpress');" >> wp-config.php
echo "define('WP_SITEURL','http://192.168.33.10/wordpress');" >> wp-config.php

# Create uploads directory
cd /var/www/html
mkdir -p wordpress/wp-content/uploads
chown -R www-data:www-data *

# Configure Wordpress to rewrite wordpress subdirectory with permalinks
#\/ es para evitar fin de codigo.
rm -f index.html
cp wordpress/index.php .
sed -i -e "s/wp-blog-header.php/wordpress\/wp-blog-header.php/" index.php
