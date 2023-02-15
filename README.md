# Laravel techincal test

## Installation
Voici les étapes pour cloner et exécuter le projet Laravel-Technical-Test en utilisant Docker :

1. Installer Docker sur votre machine si ce n'est pas déjà fait.

2. Ouvrir un terminal et se déplacer dans le répertoire où vous souhaitez cloner le projet.

3. Cloner le projet à l'aide de la commande suivante :

```
git clone https://github.com/Azerdaoui/Laravel-Technical-Test.git
```

4. Se déplacer dans le répertoire du projet :
```
cd Laravel-Technical-Test
```

5. Copier le fichier .env.example et le renommer en .env :
```
cp .env.example .env
```

6. Ouvrir le fichier .env et configurer les variables d'environnement pour se connecter à une base de données PostgreSQL. 
```
DB_CONNECTION=pgsql
DB_HOST=pgsql
DB_PORT=5432
DB_DATABASE=laravel_test
DB_USERNAME=sail
DB_PASSWORD=password
```

7. Construire l'image Docker en exécutant les commandes suivantes :

```
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs
```
Et
```
./vendor/bin/sail up

./vendor/bin/sail php artisan key:generate

./vendor/bin/sail php artisan migrate
```

8. Générer la clé secrète JWT en exécutant les commandes suivantes :
```
./vendor/bin/sail php artisan jwt:secret
```

Ouvrir un navigateur et accéder à l'adresse http://localhost:80 pour voir l'application Laravel fonctionner.

## Lien utiles

API documentation: https://documenter.getpostman.com/view/1483401/2s93CExGrx
Laravel Sail doc: https://laravel.com/docs/10.x/sail#introduction
JWT package utilisé: https://laravel-jwt-auth.readthedocs.io/en/latest/
