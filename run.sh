#!/bin/bash

# Instalar o actualizar dependencias
apt-get install -y docker.io
docker pull julioxus/html2doku

# Ejecutar docker
docker run -i -t julioxus/html2doku


