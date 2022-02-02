# Wallys Widgets

A simple test built in Laravel, Vue & Inertia JS.

## Build instructions  
  
Build the composer packages
```
composer install
```

Build the javascript packages
```
npm i && npm run dev
```

Copy .env.example to .env
```
cp ./.env.example ./.env
```

Populate database section with your credentials and create a database with the appropriate name
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=wallys_widgets
DB_USERNAME=root
DB_PASSWORD=
```

Migrate the database
```
php artisan migrate
```

Populate starting data
```
php artisan db:seed
```

## Finally
Depending on your preference you can either set up a virtual host pointing to the public folder as your entry point or run with artisan using the following command

```
php artisan serve
```
