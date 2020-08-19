###################################################################################
#                                                                                 #
#   Dockerfile file                                                               #
#   created by: Joseph P. Marino <joseph@marino.net> | https://josephmarino.net   #
#                                                                                 #
#   derived from the official docker documentation:                               #
#   https://docs.docker.com/develop/develop-images/multistage-build/              #
#                                                                                 #
###################################################################################

FROM nginx:latest AS portfolio_nginx
COPY .aws/ecs/docker/nginx/conf.d/default.conf /etc/nginx/conf.d/default.conf
COPY .aws/ecs/docker/nginx/nginx.conf /etc/nginx/nginx.conf
RUN mkdir -p /var/www/www/include
COPY src/www /var/www/www
COPY src/include /var/www/include
RUN chown -R nginx:nginx /var/www
EXPOSE 80

FROM php:7.4-fpm AS portfolio_phpfpm
COPY .aws/ecs/docker/php-fpm/php.ini /usr/local/etc/php/php.ini
RUN mkdir -p /var/www/www/include
COPY --from=portfolio_nginx /var/www/www /var/www/www
COPY --from=portfolio_nginx /var/www/include /var/www/include
RUN chown -R www-data:www-data /var/www
EXPOSE 9000