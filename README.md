# JTTP

A simple PHP implementation of the [JTTP specification](https://github.com/demartis/jttp).


## Usage
```php
```

## Response
```php
use Jttp\JttpResponse;

$data = ['field'=>'dummy data'];
$success = JttpResponse::ok($data);

$success = JttpResponse::success(200, "OK", $data);

$error = JttpResponse::error(401, null, ['Not cool.']);
$errorWithMessage = JttpResponse::error(401, 'not authorized', ['Not cool.']);
```

