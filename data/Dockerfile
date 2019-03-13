# Database - MySQL image
FROM mysql/mysql-server:5.6
# Image maintainer label
LABEL maintainer 'Passei Direto'
# This environment variable create a database called notes
ENV MYSQL_DATABASE=notes
# Copy sql-scripts
COPY ./sql-scripts/ /docker-entrypoint-initdb.d/
