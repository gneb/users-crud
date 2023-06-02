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
2. run `composer install`
3. run `./vendor/bin/sail up`
4. run `./vendor/bin/sail artisan migrate`
5. run `./vendor/bin/sail artisan db:seed`
6. open `localhost`
7. login with admin credentials noted above
