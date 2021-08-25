#La carte des Animaux

### Installation SF 5 avec docker
```
// Initialiser les images docker
docker-compose build --no-cache
// Lancer les containers docker
docker-compose up -d
```

##### Debug docker
```
docker-compose logs -f [CONTAINER_NAME: php|nginx|db|node]
```

### Doctrine
```
// Création ou modification d'une entity (table)
docker-compose exec php bin/console make:entity

// Mettre à jour votre base de donnée
docker-compose exec php bin/console doctrine:schema:update --dump-sql
docker-compose exec php bin/console doctrine:schema:update --force
```
###### Relation
https://www.doctrine-project.org/projects/doctrine-orm/en/2.7/reference/association-mapping.html
https://symfony.com/doc/current/doctrine/associations.html

### Commandes à connaitre 
```
// Création de fichier via maker bundle
docker-compose exec php bin/console make:controller
docker-compose exec php bin/console make:form
docker-compose exec php bin/console make:crud
// Debug routing
docker-compose exec php bin/console debug:router
```

### Reset password
````
make:resetpassword
1) Run "php bin/console make:migration" to generate a migration for the new "App\Entity\ResetPasswordRequest" entity. OK
2) Review forms in "src/Form" to customize validation and labels. OK
3) Review and customize the templates in `templates/reset_password`. OK
4) Make sure your MAILER_DSN env var has the correct settings.
5) Create a "forgot your password link" to the app_forgot_password_request route on your login form. OK
````