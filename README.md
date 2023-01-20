# Docker-based Drupal stack

[![Build Status](https://github.com/wodby/docker4drupal/workflows/Run%20tests/badge.svg)](https://github.com/wodby/docker4drupal/actions)

## Stack

The Drupal stack consist of the following containers:

| Container       | Versions           | Image                              | ARM64 support | Enabled by default |
|-----------------|--------------------|------------------------------------|---------------|--------------------|
| [Nginx]         | 1.23, 1.22, 1.21   | [wodby/nginx]                      | ✓             | ✓                  |
| [Drupal]        | 10, 9, 7           | [wodby/drupal]                     | ✓             | ✓                  |
| [PHP]           | 8.2, 8.1, 8.0      | [wodby/drupal-php]                 | ✓             |                    ||
| [MariaDB]       | 10.9-10.3          | [wodby/mariadb]                    | ✓             | ✓                  |
| Traefik         | latest             | [_/traefik]                        | ✓             | ✓                  |
 
Supported Drupal versions: 10 / 9 / 7

## Documentation

Para iniciar la instalación, se debe clonar el presente repositorio. Una vez clonado el repositorio se debe crear el archivo .env, en la raiz del dorectorio, con la siquiente información:

## .env

PROJECT_NAME=test_project

PROJECT_BASE_URL=drupal.docker.localhost

PROJECT_PORT=8000

DB_NAME=drupal

DB_USER=drupal

DB_PASSWORD=drupal

DB_ROOT_PASSWORD=password

DB_HOST=mariadb

DB_PORT=3306

DB_DRIVER=mysql

MARIADB_TAG=10.9-3.23.1

DRUPAL_TAG=10-4.52.6

PHP_TAG=8.2-dev-4.42.6

NGINX_TAG=1.23-5.29.1

NGINX_VHOST_PRESET=drupal9

SOLR_TAG=8-4.18.1

SOLR_CONFIG_SET="search_api_solr_4.1.6"

ZOOKEEPER_TAG=3.8

## Fin de .env

Se debe tener instalado docker-compose en la maquina que se este trabajando.
Una vez establecida la anterior información y contar con Docker-compose es momento de iniciar los contenedores con el comando

docker-compose up -d.

Despues de finalizado el anterior comando, se puede validar si se inciaron correctamente las contenedores con el siguientes comando:

docker ps

luego se debe importar el archivo de bases de datos mediante el phpmyadmin en la siguiente  url http://pma.drupal.docker.localhost:8000/ . Para iniciar nuestro sitio web de drupal, tecleamos en nuestro navegador:

drupal.docker.localhost:8000



