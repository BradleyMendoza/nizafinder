# Usar la imagen oficial de MySQL
FROM mysql:8.0

# Copiar archivo de configuración
COPY my.cnf /etc/mysql/my.cnf

# Copiar el archivo SQL para la base de datos
COPY clasificacion_niza.sql /docker-entrypoint-initdb.d/
