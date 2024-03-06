# Валидатор электронных адресов

На вход подается массив адресов, в ответ отдается массив,
где ключи - это адреса, а значения - валидность этих адресов.


## Требования

- PHP 8.2 и выше

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