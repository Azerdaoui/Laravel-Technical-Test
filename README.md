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


![Image de l'app OK](https://doc-0s-20-docs.googleusercontent.com/docs/securesc/ljfghcpc6b9mekda9dc90moeoln16bik/h5hjab5soufijofj2lut4fjunr3e84tf/1676480250000/11405695174475538439/11405695174475538439/1BGIx1aL3dA78Oizw5R8G7jdKVwf7bBvx?e=download&ax=AB85Z1DASHWCika8Ep9877-MI2zMjoD8PBPNWBeDbFdEjTTHI5tZRwLjwWpd2Ou5pFKBBYbUxXgfKIrdr37-FZpMM-ActBy4UqheFGbbFQ_5Vu1XzEWVMXCcRso_Bm-_ReiUOGtC8O9BheJwXjyhEVYX7FP2nyS0b5caU5wOHlN3i6SkVUsUg7vTytcQqimfPNeoLB04vuspeCCpTaiB5r3G1CjOrDeHoWtvEblRTWMkkoefpG624T9vGuHhFoDAWdBvb-AHo9brwEyVXOZM7gKsaVBVh85Kxcb3ZAu3TMub74FQHOa6L8-s4bYkonm9JoMRZ5HHqnaQAaJATGDSv3VfGXovNPVZuezlPnJz1lvZxW8vWmsuuiCPstlfc_u18wt4Kb1hwDt8lNEeJ9vVHZkGWrstsrbpLz2l3xyP1oLawhR0T80ClEPA0zSURbog5UC15dEZt_ZvSfaLt4dQ7DcQbap_98VI9SgiB0YngVBLamhrH6F1T5y6bqUIsOVkw19wx3-T6FaDzAjNG0-fySKHEIs8lO8lnCvpYVFk84IVvc7HVVj29Qa9WtDS2cTcC8hTKcBIT5YbZXnMeofJ8eJg2YWJNwlS-tm7FpYR40T3lBf0k8zVz212ggv2nWlCGeyce9aYKTNWTtJyiUp1yjnb4c2UkcJaC9K0-ApQfmqG06BycMiptwbowLaKDz_DvvouemzFVa__Vw3F7j7iTqE6XKVymXA9GdjeTe68U1N3cdcDMBfxkDxTMVSPNdewWazEzGiOFRU2YQmbve_k6AUyfSSGxX6HkNKERI6V-3imRVfUEMflUgyr-OqwwAOXApma07iu3BZn3s9nD2u5mIflM0ytUiX3kybNgoO6DUxjnfDJRa9FCcblTbRKPDZbDWbulfTxx5jm7BPwOfJCIm8ui3SJNLaiaSvlj7yttLQ7gI5XLodSrt02hFeLqHoibxVPS1jrEzNUMov0qQy8R4dQRUQHcOHGNCMNFQoJQExDz-a_h-vN9jxGDUvbveyEm-1mRfzVGiJchc21cpn3g2YwT44NfyEnFof2xXNAUvvhQNPo2p1sRBzdNWzMXFrmfOIvSROUbTnZLl9v7gHAj5C4px0-&uuid=f0839dbb-42c5-4d6e-acb6-810d43c8cf6f&authuser=0)



