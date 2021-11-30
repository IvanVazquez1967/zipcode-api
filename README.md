<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# Zipcode API
<h3>Mexico Zip Codes API (Spot2 Backend position challenge)<h3/>

This application has been developed with the Laravel Sail technology, so in order to run it in a local environment you can follow this steps:

- After clone, go to the root dir in your console and execute (it's an alias for the ./vendor/bin/sail bash):

```bash
alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'
```

- Configure your .env file. Run the next command to obtain an APP KEY:
```php
sail php artisan key:generate --show
```

- The repository already contains every of the dependencies to run a Laravel app in a docker container, including the Dockerfile, so you only have to do:

```bash
sail up
```

- If everything is alright, a Development Server has been started (http://0.0.0.0:80)



## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


