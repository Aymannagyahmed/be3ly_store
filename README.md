## Introduction

be3ly_store is a e-commerce web application.
Multi users, multi language using:

- mysql
- Laravel 7
- **[laravel-translatable](https://github.com/Astrotomic/laravel-translatable)**
- **[laravel-datatables](https://github.com/yajra/laravel-datatables)**
- php
- bootstrap 4

## Instlation

- composer install
- npm install
- php artisan migrate
- php artisan db:seed
- php run serve

- to add admin in first time
    php artisan tinker
    $admin = new App\Models\Admin();
    $admin->name = "ayman";
    $admin->email = "ayman@gmail.com";
    $admin->password = bcrypt("123456789");
    $admin->save();

## Demo

**[MarxManagear at heroku in progress](https://vehikl.com/)**

## License

be3ly_store is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
