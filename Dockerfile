FROM ubuntu:latest
MAINTAINER julioxus <julioxus@gmail.com>
 
RUN apt-get update

# Instalar dependencias
RUN apt-get -y install apache2
RUN apt-get -y install php5 libapache2-mod-php5 php5-mcrypt
RUN apt-get -y install libhtml-wikiconverter-perl
RUN apt-get install -y git

# Clonar repositorio
RUN git clone https://github.com/julioxus/html2doku.git

RUN mv html2doku/* /var/www/

RUN service apache2 start