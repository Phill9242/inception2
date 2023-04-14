# Penultimate Alpine Version
FROM alpine:3.16

# Att and install of nginx
RUN apk update && apk upgrade && apk add nginx --no-cache

#  NGINX folder
RUN mkdir -p /run/nginx

# nginx config
COPY ./conf/nginx.conf /etc/nginx/nginx.conf

# copy cert and key
COPY ./conf/nginx.key /etc/nginx/ssl/nginx.key
COPY ./conf/nginx.crt /etc/nginx/ssl/nginx.crt

# PORT exposure
EXPOSE 443

# NGINX start
CMD ["nginx", "-g", "daemon off;"]
