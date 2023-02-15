# Laravel techincal test - Guide

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



![Image de l'app OK](# Laravel techincal test - Guide

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



![Image de l'app OK](# Laravel techincal test - Guide

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



![Image de l'app OK](https://previews.dropbox.com/p/thumb/AB0fRI3kRdzrwrY-fAcnE-lOY-IkYKjoSOoGmEWTWL9Pb-Tm568m8xMb_iZKF6RYgUlven1saqZ3-uk-oXja_x3RMCHcog3JX50B0EYa6p6L7i4hdTTS0qsQwTfvmZI8rjrTe7MpB90t_RTveuZHhPYuNm8bMjKc4Qd86M-YutQtcKAn3WcYXEE0-48NcQjf7zg5R2w9k_oxYbAJvVJvD3DliSqV8Ws4FulntpZcLHmcVJMLR-eNmJbY7Hn2b2LvG349BqTdpSao1O83AE8W82YAk3wedXMmwG17Ms_wed45dCEuADR3jaiGCgNw9JEmRGPOuSV-rQRZZLLVfbn8qvp35a765LP26bYuKqXKXm-MSoRCnrjsVQ6GzCPAOR3a3OY/p.png)



