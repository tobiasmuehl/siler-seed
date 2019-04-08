# Siler Seed

```bash
composer create-project siler/seed
```

Seed project for [Siler](https://siler.leocavalcante.dev/) + [Swoole](https://www.swoole.co.uk/) hacking!<br>
Feel free to edit whatever files it comes bundled, it is your project now.

## What is inside

- [Siler](https://siler.leocavalcante.dev/)
- [Swoole](https://www.swoole.co.uk/)
- [Docker](https://www.docker.com/) [(Dwoole)](https://github.com/leocavalcante/dwoole)
- [dotenv](https://github.com/vlucas/phpdotenv)
- [Monolog](https://github.com/Seldaek/monolog)
- [PHPUnit](https://phpunit.de/)
- [phpcs](https://github.com/squizlabs/PHP_CodeSniffer)

## Up and running

A single `docker-compose up` will start everything.<br>
Go to http://localhost:9501/ (or the port you defined for `DOCKER_API_PORT` on `.env`).<br>
**Dwoole Hot-Restart will got you covered.**

## Recommendations

- Update names on `composer.json` and `docker-compose.yml`.
- Business rules goes under `src/` and HTTP endpoints goes under `api/`.

## Scripts

- `composer fix`
- `composer lint`
- `composer test`
