FROM ubuntu:latest
MAINTAINER julioxus <julioxus@gmail.com>
 
RUN apt-get update

# Instalar dependencias
RUN apt-get -y install apache2
RUN apt-get -y install php5 libapache2-mod-php5 php5-mcrypt
RUN apt-get -y install libhtml-wikiconverter-dokuwiki-perl
RUN apt-get -y install libreoffice
RUN apt-get install -y git

# Clonar repositorio
RUN git clone https://github.com/julioxus/html2doku.git

# Mover directorios
RUN mv html2doku/* /var/www/html
RUN rm -rf html2doku
RUN rm /var/www/html/index.html

# Dar permisos
RUN chown -R www-data:www-data /var/www
RUN chmod -R 777 /var/www/html/files

# Exponer puerto de Apache
EXPOSE 80