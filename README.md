# Skyhwk Repository
A simple repository package for Laravel and Lumen to store and retrieve text files.

#**1. Installation
Run the following command to install the package:

composer require skyhwk/repository
#**2. Setup in Laravel or Lumen
For Laravel
Add the service provider to config/app.php:

Providers:
php
Copy code
Skyhwk\Repository\RepositoryServiceProvider::class,
Aliases:
php
Copy code
'Repository' => Skyhwk\Repository\RepositoryFacade::class,
Run the following command to refresh the autoloader:

bash
Copy code
composer dump-autoload
For Lumen
Register the service provider by adding the following line in bootstrap/app.php:

php
Copy code
$app->register(Skyhwk\Repository\RepositoryServiceProvider::class);
Add the alias:

php
Copy code
class_alias(Skyhwk\Repository\RepositoryFacade::class, 'Repository');
Run the following command to refresh the autoloader:

bash
Copy code
composer dump-autoload
Now, you're ready to start using Skyhwk\Repository in your project!
