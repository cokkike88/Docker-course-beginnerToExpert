FROM centos
LABEL version=1.0
LABEL description="This is a test image."
LABEL vendor="Oscar M."
RUN yum install httpd -y

WORKDIR /var/www/html
# ADD Tambien copia carpetas y archivos pero es mas utilizado para descargar links
COPY startbootstrap-freelancer-master .
ENV contenido prueba

RUN echo "$(whoami)" > ./user1.html
RUN useradd oscar
USER oscar
RUN echo "$(whoami)" > /tmp/user2.html
USER root
RUN cp /tmp/user2.html ./user2.html
RUN echo "$contenido" > /var/www/html/prueba.html

COPY run.sh /run.sh

# CMD apachectl -DFOREGROUND
CMD sh /run.sh