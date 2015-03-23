#!/bin/bash

if [[ $EUID -ne 0 ]]; then
	echo "Debes tener permisos de administrador para ejecutar el script"
	exit 1
fi

# Instalar o actualizar dependencias
apt-get install -y docker.io
docker pull julioxus/html2doku

# Ejecutar docker
echo 'service apache2 start' | docker run -i -t -p 80:80 julioxus/html2doku /bin/bash


