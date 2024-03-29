# Siler Seed

```bash
composer create-project siler/seed
```

Seed project for [Siler](https://siler.leocavalcante.dev/) + [Swoole](https://www.swoole.co.uk/) hacking!<br>
Feel free to edit whatever files it comes bundled, it is your project now.

## What is inside

- [Siler](https://siler.leocavalcante.dev/)
- [Swoole](https://www.swoole.co.uk/)
- [Symfony console](https://symfony.com/doc/current/components/console.html)
- [Docker](https://www.docker.com/) [(Dwoole)](https://github.com/leocavalcante/dwoole)
- [dotenv](https://github.com/vlucas/phpdotenv)
- [Monolog](https://github.com/Seldaek/monolog)
- [PHPUnit](https://phpunit.de/)
- [phpcs](https://github.com/squizlabs/PHP_CodeSniffer)
- [PHP Mess Detector](https://phpmd.org/)

## Up and running

A single `docker-compose up` will start everything.<br>
Go to http://localhost:9501/ (or the port you defined for `DOCKER_HTTP_PORT` on `.env`).<br>
**Dwoole Hot-Restart will got you covered.**

## Recommendations

- Update names at `composer.json` and change this README.
- Keep your entities, models, value objects, business rules, use cases etc at `src/` and use `http/` and `bin/` for web and cli related I/O.

## Scripts

- `composer fix`
- `composer lint`
- `composer test`
- `composer all`
