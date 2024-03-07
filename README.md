# Валидатор электронных адресов

На вход подается массив адресов, в ответ отдается массив,
где не валидные адреса заменяются на false.


## Требования

- PHP 7.0 и выше

## Установка

```bash
$ composer require jack-frost/validate-emails
```

## Использование

```php
<?php

require 'vendor/autoload.php';

use \JackFrost\ValidateEmails\ValidateEmails;

$validate_emails = new ValidateEmails();
$result = $validate_emails->validate([
    'test@test.ru',
    'test@test@ru',
]);
```