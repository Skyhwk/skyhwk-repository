# Skyhwk Repository

A simple repository package for Laravel and Lumen to store and retrieve text files.

## Installation
---

### **6. Instalasi di Laravel atau Lumen**

#### **Laravel**
1. Tambahkan ke `config/app.php`:
   - **Providers**:
     ```php
     Skyhwk\Repository\RepositoryServiceProvider::class,
     ```
   - **Aliases**:
     ```php
     'Repository' => Skyhwk\Repository\RepositoryFacade::class,
     ```

2. Jalankan perintah:
   ```bash
   composer dump-autoload

   
```bash
composer require skyhwk/repository

