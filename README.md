# Docker-course-beginnerToExpert


docker info | grep -i root


### ================================================== Imagenes

### Consulta de imagenes huerfanas
docker images -f dangling=true

### Eliminacion de imagenes huerfanas
docker images -f dangling=true -q | xargs docker rmi
# -f filtrar por campo
# -q muestra solo los ids
# | xargs docker rmi le pasa el output de la consulta anterior como input a esta


### =================================================== Contenedores
docker exec -it -u root ubuntu bash
# -i forma interactiva
# -t terminar
# -u usuario

# -e "variable=valor" variable de entorno

### Eliminar contenedores
docker ps -q | xargs docker rm -f
docker rm -fv $(docker ps -aq)

### Ver el consumo de c/contenedor
docker stats nombre_contenedor/id

### Limitar recursos de un contenedor
docker run -d -m "500mb" --name mongo-test mongo
# -m "500mb" utiliza como maximo 500mb de memoria

# Ver los cpus 
grep "model name" /proc/cpuinfo | wc -l

docker run -d -m "1gb" --cpuset-cpus 0-1 --name mongo-test2 mongo
# --cpuset-cpus 0-1 solo puede utilizar los cpu 0 y 1

### Copiar archivos de la maquina local al contenedor
docker cp archivo.txt apache:/tmp
# apache es el nombre del conteedor y despues del : la ruta donde se va a copiar.

### Copiar archivo del contenedor a la maquina local
docker cp apache:/tmp/archivo.txt .

### ===================================================== Volumenes

docker volume ls
docker volume create my-volume
docker volume rm my-volume

docker volume ls -f dangling=true

# Volumenes Host
docker run -d -p 3307:3306 -e "MYSQL_ROOT_PASSWORD=123" -e "MYSQL_DATABASE=mydb" -v "/home/kok/Cursos/Docker-course-beginnerToExpert/Docker containers/volumes/":/var/lib/mysql mysql

# -v ruta_absoluta_del_host:ruta_dentro_contenedor
docker run -d -p 27018:27017 --name mongo-test -v "/home/kok/Cursos/Docker-course-beginnerToExpert/Docker containers/mongo-volumen":/data/db mongo

### Ejecutar un comando sin abrir el contendedor como interactivo
docker exec mongo-test bash -c "ping 10.66.33.1"

# -c Ingresa el comando a ejecutar

### ====================================================== Network

# bridge en la red por defecto de docker

### Crear una red
docker network create network-test

docker network create -d bridge --subnet 172.124.10.0/24 --gateway 172.124.10.1/24 docker-network-test

# -d selecciona el tipo de red
# --subnet ip de la subnet
# --gateway ip del gateway

### Listar redes
docker network ls
docker network ls | grep test

### Inspeccionar red
docker network inpsect docker-network-test

docker network inpsect docker-network-test | less

# | less para verlo desde el comienzo

### Conectar un contenedor a una red
docker run --network docker-network-test centos

### Conecar un contenedor a una red despues de crear el contenedor
docker network connect nombre_red nombre_contenedor

### Conecar un contenedor a una red despues de crear el contenedor
docker network disconnect nombre_red nombre_contenedor

### Eliminar una red
docker network rm nombre_red

### Asignar una ip a un contenedor
docker run --network my-net --ip 172.128.10.50 -d --name nginx1 -it centos

### ====================================================== docker-compose

### Asginar un nombre al proyecto
docker-compose -p nombre_proyecto up -d