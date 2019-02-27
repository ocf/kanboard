FROM kanboard/kanboard:v1.2.8

COPY config.php /var/www/app/config.php

# change nginx user to use uid 1083 (ocfkanboard) so it can access
# the data and plugin volumes
RUN ["sed", "--regexp-extended", "--in-place", "s/nginx:x:[0-9]+/nginx:x:1083/", "/etc/passwd"]
# these directories need to be owned by nginx
RUN ["chown", "nginx", "/var/lib/nginx", "/var/tmp/nginx"]
