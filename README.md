# What's New in Laravel 10

## Generate Secure Passwords

```php
 Illuminate\Support\Str::password()

 str()->password()

 str()->password(25)

 str()->password(15, numbers: false)
```

## Quicker Project Scaffolding

```php
laravel new laravel10 --pest --breeze
```

## The New Process Facade

```php
use  Illuminate\Support\Facades\Process;
Process::run('ls -la')->output()->exitCode()->errorOutput()->successful() {
    return 'it worked';
};

Process::run('npm run build')->output();
```
