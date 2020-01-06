FROM ubuntu
RUN apt update && \ 
    apt upgrade -y && \
    apt install apache2 -y && \
    service apache2 start
RUN echo "62" | echo "2" | apt install php -y xorg
RUN apt install libapache2-mod-php 
RUN apt install php-mysql 