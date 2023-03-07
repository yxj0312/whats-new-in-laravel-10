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

Process::run('npm run build', function($$type, $output){
    $this->info($output);
});


$process = Process::start('npm run build');

Process::fake(['git log' => 'a fake git log'])

while($$process->running()) {
    $this->info("Working..")

    sleep(1);
}

$process->wait();

$this->info($$process->output);

Process::assertRan('git log');

```
