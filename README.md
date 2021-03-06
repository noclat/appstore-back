# Algolia Appstore back-end

[View home page](https://appstore-noclat.herokuapp.com/)

## Test the API

1. [Download and install Postman](https://www.getpostman.com/)
2. Import [util/prod.postman.json](util/prod.postman.json)
3. Run the HTTP requests

*Don't forget to replace the ID in the `DELETE apps` request URL with the one you got from the `POST apps` result.*

## Run locally

```
git clone git@github.com:noclat/appstore-back.git
cd appstore-back
composer install
```

### Helper: install composer

```
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('SHA384', 'composer-setup.php') === '669656bab3166a7aff8a7506b8cb2d1c292f042046c5a994c43155c0be6190fa0355160742ab2e1c88d40d5be660b410') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"

php composer.phar install
```

[Full instructions](https://getcomposer.org/doc/00-intro.md)

## Notes

- The first request response time may last a few seconds due to Heroku free plan limitations.
- The documentation of the router is available at [util/R76-doc.md](util/R76-doc.md).

## Resources

- [R76, old personal PHP router](https://github.com/noclat/R76)
- [github-markdown-css](https://github.com/sindresorhus/github-markdown-css)
