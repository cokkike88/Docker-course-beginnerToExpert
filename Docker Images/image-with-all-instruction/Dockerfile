FROM nginx
RUN useradd oscar
COPY fruit /usr/share/nginx/html
ENV archivo docker
WORKDIR /usr/share/nginx/html
RUN echo "$archivo" > env.html
EXPOSE 90
LABEL version=1
USER oscar
RUN echo "Yo soy $(whoami)" > /tmp/yo.html
USER root
RUN cp /tmp/yo.html /usr/share/nginx/html/docker.html
VOLUME /var/log/nginx
# CMD nginx -g 'daemon off;'