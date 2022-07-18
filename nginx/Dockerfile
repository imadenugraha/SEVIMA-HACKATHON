# syntax=docker/dockerfile:1

FROM nginx:1.23.0-alpine
COPY ./default.conf /etc/nginx/conf.d/default.conf

CMD [ "nginx", "-g", "daemon off;" ]