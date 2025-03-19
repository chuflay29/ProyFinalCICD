# Use the official MySQL image from the Docker Hub
FROM mysql:8.0

COPY sqlinicial.sql /docker-entrypoint-initdb.d/

# Expose the default MySQL port
EXPOSE 3306