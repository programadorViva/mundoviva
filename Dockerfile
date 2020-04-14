FROM rafaelviva/mysql:2018-01.19
RUN rm -fR "/var/lib/mysql/*"
COPY "./data" "/var/lib/mysql"
RUN chown mysql.mysql /var/lib/mysql -R
