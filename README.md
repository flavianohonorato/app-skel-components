
#### App Created Using Illuminate and Others PHP Components

How to use:

```
composer require wicool/app-skel-components
```

add your settings to folder files: ```src/config/*.php```

Create the folders in the root folder of your project(with write permissions):
```
db/migrations
db/seeds
```

Now run the following command to generate the PHINX configuration file ```vendor/bin/phinx init```.

This command will generate the following file in the root of your project. ```phinx.yml```, insira suas credenciais.

Run migrations file with:
```
php vendor/bin/phinx migrate
```

Run the seed for populate data: 
```
php vendor/bin/phinx seed:run
```

For more details on creating your migrations and seeds, visit the  [official Phinx doc here.](http://docs.phinx.org/en/latest/migrations.html)

Components used:
- [robmorgan/phinx](http://docs.phinx.org/en/latest/migrations.html)
- [league/plates](https://platesphp.com/v3/)
- [fzaninotto/faker](https://github.com/fzaninotto/Faker)
- [illuminate/database](https://github.com/laravel/framework)
- [illuminate/routing](https://github.com/laravel/framework)
- [illuminate/events](https://github.com/laravel/framework)
- [illuminate/pagination](https://github.com/laravel/framework)
- [illuminate/session](https://github.com/laravel/framework)
- [illuminate/validation](https://github.com/laravel/framework)
- [illuminate/config](https://github.com/laravel/framework)

More soon...
