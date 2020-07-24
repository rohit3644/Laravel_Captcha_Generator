# Laravel Captcha Generator

## Installation and Setup steps

Step 1: git clone `https://github.com/rohit3644/Laravel_Captcha_Generator.git`.

Step 2: Move to the cloned project folder.

Step 3: Type `composer install` and `composer dump-autoload` to install and refresh all the dependencies.

Step 4: Create an .env file `touch .env`.

Step 5: Copy the content of .env.example file to .env file.

STep 6: Type `php artisan key:generate && php artisan cache:clear && php artisan config:clear && composer dump-autoload`.

Step 4: Lastly, type `php artisan serve` to start local development server.
