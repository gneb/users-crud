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
3. run `composer install`
4. run `composer install`
5. run `./vendor/bin/sail up`
6. run `./vendor/bin/sail artisan migrate`
7. run `./vendor/bin/sail artisan db:seed`
8. open `localhost`
9. login with admin credentials noted above
