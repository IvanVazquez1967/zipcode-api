<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# Zipcode API
<h3>Mexico Zip Codes API<h3/>

This application has been developed with Laravel Framework, so in order to run it in a local environment you must have php stack environment on you system (php, apache, composer, mysql, Laravel) can follow this steps:

- After clone, go to the root dir in your console and execute migrations:

```bash
php artisan migrate
```

- Configure your .env file. Run the next command to obtain an APP KEY:
```php
sail php artisan key:generate --show
```

- You can use fake data for development, running:

```bash
php artisan migrate:fresh --seed
```

- Or if you prefer, you can run the next command in order to get real zip codes data:

```bash
php artisan command:store-zipcodes-data
```
