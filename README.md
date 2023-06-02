## Simple users crud

Simple users crud. in database will be one admin with credentials. admin can view,add,edit or delete all users. admin can't delete himself.

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
6. run `./vendor/bin/sail up --build`
7. open new terminal window and run commands below
8. run `./vendor/bin/sail artisan config:clear`
9. run `./vendor/bin/sail artisan key:generate`
10. run `./vendor/bin/sail artisan migrate`
11. run `./vendor/bin/sail artisan db:seed`
12. open `localhost`
13. login with admin credentials noted above
