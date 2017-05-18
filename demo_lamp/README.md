# DevoBot (BotMan Laravel Starter)

Proyecto Laravel donde utilizamos [BotMan](https://github.com/mpociot/botman) servicio mutiplataforma para la creación de Bots

## Instalación

1. `docker-compose up -d OR docker-compose down -v`
2. `composer install OR composer update`
3. `npm install`
4. `gulp`
5. edit file `mbot/.env` add token from chat platform
6. `php artisan botman:listen`

## Replication skelleton of this project (NO Docker)

1. Create a new bot project using this boilerplate.

```bash
composer create-project mpociot/botman-laravel-starter my_new_bot
```

2. Optional Install [Laravel Valet](https://laravel.com/docs/5.3/valet) and use `valet share` to retrieve a HTTPS URL that you can use in 
the messaging services for testing. The predefined route is `/botman`.

3. Edit your `.env` file and [connect BotMan with your Messaging Services](https://github.com/mpociot/botman#connect-with-your-messaging-service)

4. Modify your bot logic in `app/Controllers/BotManController.php` and/or `routes/botman.php`.

5. Build awesome bots!

> If you want to use the Slack RTM API, simply call `php artisan botman:listen` to let your bot connect to your Slack channel!

## License BotMan

BotMan and this boilerplate is free software distributed under the terms of the MIT license.


## Others library

https://github.com/botpress/botpress
