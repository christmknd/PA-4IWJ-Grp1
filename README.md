# La carte des Animaux
Un site d'annonce d'adoption et de perte d'animeaux

## Init projet avec Docker

```
// Initialiser les images docker
docker-compose build --no-cache
// Lancer les containers docker
docker-compose up -d
```

## Creer une migration
Création du schema
```
docker-compose exec php bin/console doctrine:migrations:dump-schema
```

Update migration
```
docker-compose exec php bin/console doctrine:migrations:execute  
```

Création migration
```
docker-compose exec php bin/console make:mig
```

Make migrate
```
docker-compose exec php bin/console doc:migration:m (prev)
```

## Fixtures
Créer les fixtures
``
docker-compose exec php bin/console doctrine:fixtures:load
``

## Commande symfony Help

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
```bash
// Création de fichier via maker bundle
docker-compose exec php bin/console make:controller
docker-compose exec php bin/console make:form
docker-compose exec php bin/console make:crud
// Debug routing
docker-compose exec php bin/console debug:router
```

### Reset password
````bash
make:resetpassword
1) Run "php bin/console make:migration" to generate a migration for the new "App\Entity\ResetPasswordRequest" entity. OK
2) Review forms in "src/Form" to customize validation and labels. OK
3) Review and customize the templates in `templates/reset_password`. OK
4) Make sure your MAILER_DSN env var has the correct settings.
5) Create a "forgot your password link" to the app_forgot_password_request route on your login form. OK
````

### Voter
````bash
make:voter
````

### Error Page
Affichage seulement en prod
````bash
composer require symfony/twig-pack
````

### Design : Webpack Encore 

````bash

1) composer require symfony/webpack-encore-bundle

npm install OU yarn  
 

2)Configurer webpack.config.js
Pour utiliser Sass : décommenter .enableSassLoader()
npm install sass-loader   
OU yarn add sass-loader

3) Modifier template/base.html.twig
Déplacer son code css dans assets/styles

Ajouter dans base.html.twig
{{ encore_entry_link_tags('nom_du_fichier_css') }} dans le block stylesheets
{{ encore_entry_script_tags('app') }} dans le block javascript 

4)Executer ces commandes 
npm run dev 
OU
yarn encore dev 
````
