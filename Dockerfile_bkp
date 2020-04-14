FROM rafaelviva/mysql:2017
RUN rm -fR "/var/lib/mysql/*"
COPY "./mysql" "/var/lib/mysql"
RUN chown mysql.mysql /var/lib/mysql -R

