## Simple users crud

Simple users crud. in database will be one admin with credentials

```
username: admin
password: admin
```

and 50 users. passwords for all users will be:
`password`

## Run

1. clone `master` repository
2. cd to project directory
3. make copy of `.env.example` and reaname it to `.env`
4. set `DB_HOST` variable to `mysql` inside `.env` file.
5. run `composer install`
6. run `./vendor/bin/sail artisan config:clear`
7. run `./vendor/bin/sail artisan key:generate`
8. run `./vendor/bin/sail up --build`
9. run `./vendor/bin/sail artisan migrate`
10. run `./vendor/bin/sail artisan db:seed`
11. open `localhost`
12. login with admin credentials noted above
