Here is the corrected version of the `README.md` file with the appropriate formatting for the bash commands and code blocks:

```markdown
# Skyhwk Repository
A simple repository package for Laravel and Lumen to store and retrieve text files.

## 1. Installation
Run the following command to install the package:

```bash
composer require skyhwk/repository
```

## 2. Setup in Laravel or Lumen

### For Laravel
Add the service provider to `config/app.php`:

Providers:
```php
Skyhwk\Repository\RepositoryServiceProvider::class,
```

Aliases:
```php
'Repository' => Skyhwk\Repository.RepositoryFacade::class,
```

Run the following command to refresh the autoloader:

```bash
composer dump-autoload
```

### For Lumen
Register the service provider by adding the following line in `bootstrap/app.php`:

```php
$app->register(Skyhwk\Repository\RepositoryServiceProvider::class);
```

Add the alias:

```php
class_alias(Skyhwk\Repository\RepositoryFacade::class, 'Repository');
```

Run the following command to refresh the autoloader:

```bash
composer dump-autoload
```

Now, you're ready to start using Skyhwk\Repository in your project!
```

You can update the `README.md` file in your repository with these changes.
