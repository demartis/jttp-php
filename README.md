# JTTP

A simple PHP implementation of the [JTTP specification](https://github.com/demartis/jttp).


## Usage
```php
```

## Response
```php
use Jttp\Jttp;

$data = ['field'=>'dummy data'];
$success = Jttp::success(200, "OK", $data);

$error = Jttp::error(401, null, ['Not cool.']);
```

