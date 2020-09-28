<?php

namespace App\Common\Contracts;

use Illuminate\Http\JsonResponse;

interface ResponseInterface
{
    /**
     * Return of a JSON response.
     *
     * @return JsonResponse
     */
    public static function send(): JsonResponse;
}
