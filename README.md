# todo list
 
learning laravel by making a simple todo app
30 mins tutorial: https://www.youtube.com/watch?v=AEVhR-hD2Wk
read docs later

## Pre-requisite
- install php, composer, mysql (preferrably tableplus)

### Notes
- Init laravel project
```
composer create-project laravel/laravel todoList
```
- Update home page: `~/resources/views/welcome.blade.php`
- Start app: http://localhost:8080/
```
php artisan serve 
```
- Update mysql properties `~/.env`
- Create a model and `-m` for creating a migration file under `databse/migrations/2022...`
```
php artisan make:model ListItem -m
```
- Run Migration
```
php artisan migrate
Migrating: 2022_04_12_132301_create_list_items_table
Migrated:  2022_04_12_132301_create_list_items_table (2.24ms)
```
