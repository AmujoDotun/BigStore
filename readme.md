
$ composer install
```


### Setup
- When you are done with installation, copy the `.env.example` file to `.env`

  ```$ copy and paste .env.example into .env file you just created```


- Generate the application key

  ```$ php artisan key:generate```


- Add your database credentials to the necessary `env` fields db name is homestead(you can name it anything you want just make sure you have the same name with the one in your .env file)

- Migrate the application

  ```$ php artisan migrate```

- Install laravel passport

  ```$ php artisan passport:install```

- Seed Database

  ```$ php artisan db:seed```


- Install node modules

  ```$ npm install```


### Run the application

  ```$ php artisan serve```

### create new account and for the admin credential, it have been sent to your mail

