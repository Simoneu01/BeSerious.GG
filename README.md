[![Laravel](https://github.com/Simoneu01/BeSerious.GG/actions/workflows/laravel.yml/badge.svg)](https://github.com/Simoneu01/BeSerious.GG/actions/workflows/laravel.yml)
[![PHPStan](https://github.com/Simoneu01/BeSerious.GG/actions/workflows/phpstan.yml/badge.svg)](https://github.com/Simoneu01/BeSerious.GG/actions/workflows/phpstan.yml)
[![codecov](https://codecov.io/gh/Simoneu01/BeSerious.GG/branch/main/graph/badge.svg?token=IBU2YZRCTD)](https://codecov.io/gh/Simoneu01/BeSerious.GG)

## About BeSerious

Be Serious è un organizatore di tornei di Rainbow Six Siege.

## Installation
- Clone the project and `cd` into it
- Install composer deps: `composer install`
- Install npm deps: `npm install && npm run build`
- Create a copy of .env file `cp .env.example .env` and fill it
- Generate an app encryption key `php artisan key:generate`
- Migrate the databse `php artisan migrate`

## Deploy
Questa repository di github è collegata automaticamente ad un istanza di [Coolify](https://github.com/coollabsio/coolify) ed esegue un deploy automatico

## Contributing

Thank you for considering contributing to the BeSerious!

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Simone Ungaro via [simone.ungaro@beserious.gg](mailto:simone.ungaro@beserious.gg). All security vulnerabilities will be promptly addressed.

## License

The BeSerious Site is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
