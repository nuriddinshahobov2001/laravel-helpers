# This package will help you

# Install
```bash
composer require zintel/laravel-helpers
```
### Change config file
```php
<?php
// config/app.php

'aliases' => Facade::defaultAliases()->merge([
        'Zintel' => Zintel\LaravelHelpers\Facades\ZintelFacade::class,
    ])->toArray(),
```

### ZintelString Class
```bash
   $str = 'HELLO WORLD!';
   $result = ZintelString::toLowerCase($str); // hello world!
    
   $str = 'Laravel'
   $result = ZintelString::reverse($str); // "levaraL"
```

### ZintelDate Class
```bash
   $date = '2025-01-01';
   $result = ZintelDate::dayOfWeek($date); // 'Thursday'
   
   $date = '2024-12-12';
   $result = ZintelDate::monthName($date); // "December"
```

### ZintelArray Class
```bash
   $array1 = ['name' => 'Nuriddin', 'age' => 23];
   $result = ZintelArray::isAssociative($array1); // true
   
   $array2 = [1, 2, 3];  
   $result = ZintelArray::isAssociative($array2); // false
```
