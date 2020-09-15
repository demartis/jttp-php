# JTTP

A simple PHP implementation of the [JTTP specification](https://github.com/demartis/jttp).

- [GitHub project](https://github.com/demartis/jttp-php)
- [Composer package](https://packagist.org/packages/demartis/jttp)

## Usage

```php
use Jttp\JttpResponse;

$data = ['field'=>'dummy data'];
$success = JttpResponse::ok($data);

$success = JttpResponse::success(200, "OK", $data);

$error = JttpResponse::error(401, null, ['Not cool.']);
$errorWithMessage = JttpResponse::error(401, 'not authorized', ['Not cool.']);


```

Create Jttp object from JttpResponse:

```php
use Jttp\Jttp;
use Jttp\JttpResponse;
$data = ['field'=>'dummy data'];
$responseOkWithData = JttpResponse::ok($data);
$jttp = Jttp::createFromResponse($responseOkWithData);
```


