<?php


namespace Jttp;


interface JttpExposedMethodsInterface
{
    public static function ok(array $data = null);
    public static function success(int $statusCode, ?string $statusCodeMessage=null, array $data = null);
    public static function error(int $statusCode, ?string $statusCodeMessage=null, array $error = null);
}