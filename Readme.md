<!-- Start project -->

symfony server:start

- symfony check:security

- symfony console

https://twig.symfony.com/doc/3.x/filters/index.html
https://twig.symfony.com/doc/3.x/functions/index.html
https://symfony.com/doc/current/reference/twig_reference.html

- composer require twig

https://symfony.com/bundles/SymfonyMakerBundle/current/index.html

- composer require --dev symfony/maker-bundle
- php bin/console list make
- symfony console make:controller

https://symfony.com/doc/current/profiler.html

- composer require --dev symfony/profiler-pack

composer require symfony/orm-pack

docker compose up

symfony console list doctrine

#Create database
symfony console doctrine:database:create

#Create Entity
symfony console make:entity

https://symfony.com/bundles/DoctrineMigrationsBundle/current/index.html
symfony console make:migration
symfony console doctrine:migrations:status
symfony console doctrine:migrations:migrate
symfony console doctrine:migrations:status

https://symfony.com/bundles/DoctrineFixturesBundle/current/index.html
composer require --dev orm-fixtures
symfony console doctrine:fixtures:load

https://symfony.com/doc/current/doctrine.html#persisting-objects-to-the-database
https://symfony.com/doc/current/doctrine.html#updating-an-object

https://symfony.com/doc/current/doctrine.html#automatically-fetching-objects-entityvalueresolver

composer require sensio/framework-extra-bundle #NO working

https://symfony.com/doc/current/forms.html#rendering-forms
composer require symfony/form

symfony console make:form

https://tailwindcss.com/
https://tailwindcss.com/docs/screens

composer require symfony/validator

symfony console make:user
composer require security
symfony console make:user

symfony console make:entity

<!-- UserProfile -->

symfony console make:migration
symfony console doctrine:migrations:migrate

symfony console make:entity

<!-- UserProfile -->

-- Add relation with User table

symfony console make:migration
symfony console doctrine:migrations:migrate

https://symfony.com/doc/current/console.html

<!-- Creating a command -->

symfony console make:command
-- app:create-user

<!-- Running the command -->

symfony console app:create-user

https://symfony.com/doc/current/security.html#the-firewall
symfony console make:controller
-- LoginController

<!--
WARNING: This removes all the database tables!
Cannot be reverted!
Only use on development machine!
-->

symfony console doctrine:schema:drop --force

<!--
Creating database scheme
[CAUTION] This operation should not be executed in a production environment!
-->

symfony console doctrine:schema:create

<!-- ROLES -->

IS_AUTHENTICATED_FULLY == ROLE_USER => synonymous

<!-- https://symfony.com/doc/current/security/voters.html -->

symfony console make:voter

<!-- Creating a registration form for App\Entity\User -->

symfony console make:registration-form
composer require symfonycasts/verify-email-bundle

<!-- What is the difference between 0.0.0.0, 127.0.0.1 and localhost? -->

https://stackoverflow.com/questions/20778771/what-is-the-difference-between-0-0-0-0-127-0-0-1-and-localhost

<!-- How to Create and Enable Custom User Checkers -->

https://symfony.com/doc/current/security/user_checkers.html

<!-- this return the last URL from which this page was visited     -->

return $this->redirect($request->headers->get('referer'));

<!-- in twig files always contains the current route -->

app.request.get('\_route')
