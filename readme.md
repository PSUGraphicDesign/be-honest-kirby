# BeHonest

### Configuration

You'll probably have to add the following to `site/config/config.php`:

```php
c::set('home', '2015');
```

Of course, replace `2015` with the current year.


On line 17 of `.htaccess`, you'll also need to update the `RewriteBase` to match your server environment.

This is not necessary when run on a UNIX system, when using:

```sh
php -S localhost:8000
```
