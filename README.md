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
- Need a controller to move the business logic: `view('Welcome')` out of the routes. Create a controller using artisan command. Then it would create a file `TodoListController` inside `App/Http/Controllers/`
```php
php artisan make:controller TodoListController
```
- Move the business logic into the controller. Hit TodoListController class's saveItem when saveItemRoute is called.
```php
Route::post('/saveItemRoute', [TodoListController::class, 'saveItem'])->name('saveItem');
```
- Now, we need to actually persist our todo item in db. So what we are passing from a form comes in a $request object. Basically to see what a request object can have you can use and check the logs at `storage/logs/laravel.log`:
```php
\Log::info(json_encode($request->all()));
```
- Now, let's save the data we got in the api call `/saveItem`:
```php
    $listItem = new ListItem;        
    $listItem->name = $request->listItem;
    $listItem->is_complete = 0;
    $listItem->save();
```

