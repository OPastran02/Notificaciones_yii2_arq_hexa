#!/bin/bash
set -e

# Inicia el servicio de MySQL
/usr/local/bin/docker-entrypoint.sh mysqld &

# Espera a que MySQL esté disponible
until mysqladmin ping -h"localhost" --silent; do
    echo "Esperando a que MySQL esté disponible..."
    sleep 1
done

# Ejecuta scripts SQL secuencialmente
for sql_file in /docker-entrypoint-initdb.d/*.sql; do
    echo "Ejecutando script: $sql_file"
    mysql -u "$MYSQL_USER" -p"$MYSQL_PASSWORD" "$MYSQL_DATABASE" < "$sql_file"
done

# Detén el servicio de MySQL
mysqladmin -u "$MYSQL_USER" -p"$MYSQL_PASSWORD" shutdown

# Salida del script
exec "$@"
