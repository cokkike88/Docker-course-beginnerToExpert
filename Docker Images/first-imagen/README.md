### 
docker build --tag centos-apache .

### 
docker build --tag centos-apache:primera .

### build container
docker run -d --name apache centos-apache:apache-cmd

### build container
docker run -d --name apache -p 81:80 centos-apache:apache-cmd
