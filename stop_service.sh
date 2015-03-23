#!/bin/bash

if [[ $EUID -ne 0 ]]; then
	echo "Debes tener permisos de administrador para ejecutar el script"
	exit 1
fi

id=$(docker ps | awk 'NR==2{print $1}')
docker stop $id
