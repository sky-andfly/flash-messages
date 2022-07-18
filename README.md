# FLASH messages based on PHP SESSION
___
## Using
Start the session and connect the file `FlashMessages.php`:
```php
session_start();
require_once  'FlashMessages.php';
```
Create an object of the `FleshMessages` class:
```php
$flash = new FlashMessages();
```
If you want to set up a session, use the following method:
```php
$flash->set('key', 'text');
```
You can also get a session by key or delete it:
```php
$flash->get('key');
$flash->delete('key');
```
In order to use flash messages use this:
```php
$flash->getFlashMessages('name');
```
Flash messages are deleted after the page is refreshed
___
## Example
```php
<?php
session_start();
require_once  'FlashMessages.php';
$flash = new FlashMessages();


$flash->set('error', 'Login or password error');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?=$flash->getFlashMessages('error');?>
</body>
</html>
```
