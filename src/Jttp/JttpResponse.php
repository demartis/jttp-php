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

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class JttpResponse extends JsonResponse implements JttpExposedMethodsInterface
{
    /**
     * JttpResponse constructor.
     *
     * @param Jttp $jttp
     */
    public function __construct(Jttp $jttp)
    {
        $data = $jttp->toArray();
        $statusCode = $jttp->getCode();
        $headers = [];
        $json = false;

        parent::__construct($data, $statusCode, $headers, $json);
    }

    public static function ok(array $data = null)
    {
        return new static(Jttp::ok($data));
    }

    public static function success(int $statusCode, ?string $statusCodeMessage = null, array $data = null)
    {
        return new static(Jttp::success($statusCode, $statusCodeMessage, $data));
    }

    public static function error(int $statusCode, ?string $statusCodeMessage = null, array $error = null)
    {
        return new static(Jttp::error($statusCode, $statusCodeMessage, $error));
    }
}
