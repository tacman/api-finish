# API Platform Tutorial

This repository holds the code and script
for the [API Platform](https://symfonycasts.com/screencast/api-platform) course on SymfonyCasts.  

It has been updated to work with PHP8 and Symfony >= 5.4.  It uses api-platform/core:^2.6, and uses attributes rather than annotations.

At the moment, tests don't work, the wrong client is being wired into phpunit.

## Setup

If you've just downloaded the code, congratulations!!

To get it working, follow these steps:

**Download Composer dependencies**

Make sure you have [Composer installed](https://getcomposer.org/download/)
and then run:

```
composer install
```

You may alternatively need to run `php composer.phar install`, depending
on how you installed Composer.

**Configure the .env (or .env.local) File**

The default database is sqlite, so the ext-sqlite should be installed, or set DATABASE_URL in .env.local to use another database.

**Setup the Database**

Again, make sure `.env` is setup for your computer. Then, create
the database & tables!

```
php bin/console doctrine:database:create
php bin/console doctrine:schema:update --force
```
**Create A Test User**

```angular2svg
php bin/console doctrine:fixtures:load -n
```

creates a test user with an ADMIN_SUPER_USER role, with username *foo@example.com* and password *foo*.

If you get an error that the database exists, that should
be ok. But if you have problems, completely drop the
database (`doctrine:database:drop --force`) and try again.

**Compiling Webpack Encore Assets**

This tutorial uses [Webpack Encore](https://symfonycasts.com/encore),
which isn't important to understand what's going on, but *is* important
to get our app running. We'll also do a little bit of JavaScript coding
to talk to our API.

Make sure to install Node and also [yarn](https://yarnpkg.com).
Then run:

```
yarn install
yarn encore dev --watch
```

**Start the built-in web server**

You can use Nginx or Apache, but Symfony's local web server
works even better.

To install the Symfony local web server, follow
"Downloading the Symfony client" instructions found
here: https://symfony.com/download - you only need to do this
once on your system.

Then, to start the web server, open a terminal, move into the
project, and run:

```
symfony serve
```

(If this is your first time using this command, you may see an
error that you need to run `symfony server:ca:install` first).

Now check out the site at `https://localhost:8000`

Have fun!

## Have Ideas, Feedback or an Issue?

If you have suggestions or questions, please feel free to
open an issue on this repository or comment on the course
itself. We're watching both :).

## Thanks!

And as always, thanks so much for your support and letting
us do what we love!

<3 Your friends at SymfonyCasts
