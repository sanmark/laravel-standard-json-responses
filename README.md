# Sanmark Laravel Standard JSON Responses

## Development Guide

1 - Create a Laravel application. We'll refer to this as the "Scaffolding Laravel Application" (SLA).

2 - In SLA's root, create directory `packages/sanmark`.

3 - Clone this repository into that directory.

4 - To the SLA's `composer.json` file's `autoload.psr-4` section, add the following:

```
"Sanmark\\LaravelStandardJsonResponses\\": "packages/sanmark/laravel-standard-json-responses/src"
```

5 - To the SLA's `config/app.php` file's `providers` section, add the following:

```
Sanmark\LaravelStandardJsonResponses\LaravelStandardJsonResponsesServiceProvider::class,
```

6 - Setup PHP CS Fixer.

 - Install Composer package `friendsofphp/php-cs-fixer` on SLA.
 - Create a symlink to the `.php_cs.dist` file in the SLA's root.
 - To run PHP CS Fixer, issue the command `./vendor/bin/php-cs-fixer fix` from SLA's root.
