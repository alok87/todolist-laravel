# todo list
 
Learning laravel
Youtube 30mins laravel tutorial: https://www.youtube.com/watch?v=AEVhR-hD2Wk

## Pre-requisite
- install php, composer, mysql (preferrably tableplus)

### Notes
- Init laravel project
```php
composer create-project laravel/laravel todoList
```
- Update home page: `~/resources/views/welcome.blade.php`
- Start app: http://localhost:8080/
```php
php artisan serve 
```
- Update mysql properties `~/.env`
- Create a model and `-m` for creating a migration file under `databse/migrations/2022...`
```php
php artisan make:model ListItem -m
```
- Run Migration
```php
php artisan migrate
Migrating: 2022_04_12_132301_create_list_items_table
Migrated:  2022_04_12_132301_create_list_items_table (2.24ms)
```
- Create a form in `welcome.blade.php` with an action as route
- Create a post route to take the request from webpage, in `routes/web.php`. So after this form action `{{ route('saveItem') }}` can reach here. So now clicking save item in the web page will take us to the localhost:8000/saveItemRoute.
```php
Route::post('/saveItemRoute', function () {
    return view('welcome');
})->name('saveItem');
``` 
- Moving the business logic from routes/web.php to a controller, so first create a controller using artisan command. Then it would create a file `TodoListController` inside `App/Http/Controllers/`
```php
php artisan make:controller TodoListController
```
