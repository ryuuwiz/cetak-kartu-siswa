# Installation

- Clone the repo
- Install dependencies 

    ```bash
    composer install && npm install
    ```

  - Fill the .env with our dev environment 

    example or you can see the example on .env.example file.
    MySQL or SQLite (choose one).
      ```bash
      DB_CONNECTION=mysql
      DB_HOST=127.0.0.1
      DB_PORT=3306
      DB_DATABASE=kartu-siswa
      DB_USERNAME=root
      DB_PASSWORD=
      ```
    
    ```bash
    DB_CONNECTION=sqlite
    ```
  


- Generate the key (important)

    ```bash
    php artisan key:generate
    ```

- Link the storage (important)

    ```bash
    php artisan storage:link
    ```

- Migrate & Seed DB (important)

  Beware migrate fresh will make all tables empty. (Don’t try this on production DB)

  For safety try using ***php artisan migrate***

    ```bash
    php artisan migrate:fresh
    
    and 
    
    php artisan db:seed
    ```

- Run the app

    ```bash
    php artisan serve
    ```
    
