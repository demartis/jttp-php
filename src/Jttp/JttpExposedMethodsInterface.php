<?php

/**
 * This file is part of a repository on GitHub.
 *
 * (c) Riccardo De Martis <riccardo@demartis.it>
 *
 * <https://github.com/demartis>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Jttp;

interface JttpExposedMethodsInterface
{
    public static function ok(array $data = null);

    public static function success(int $statusCode, ?string $statusCodeMessage=null, array $data = null);

    public static function error(int $statusCode, ?string $statusCodeMessage=null, array $error = null);
}
