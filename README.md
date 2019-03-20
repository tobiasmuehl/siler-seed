# Siler Seed

Seed project for [Siler](https://siler.leocavalcante.dev/) + [Swoole](https://www.swoole.co.uk/) hacking!
Feel free to edit whatever files it comes bundled, it is your project now.

## What is inside

- Siler
- Swoole
- Docker
- .env
- Monolog
- PHPUnit
- phpcs

## Don't forget

- `cp .env.dist .env` (then edit it)
- `composer install`

## Up and running

A single `docker-compose up` will start everything.
Go to http://localhost:9501/ (or the port you defined on `DOCKER_API_PORT`).
**Dwoole Hot-Restart will got you covered.**

## Recommendations

- Business rules goes under `src/` and HTTP endpoints goes under `http/`.

## Scripts

- `composer lint`
- `composer test`
