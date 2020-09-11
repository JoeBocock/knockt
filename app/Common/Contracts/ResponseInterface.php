<?php

namespace App\Common\Contracts;

use Illuminate\Http\JsonResponse;

interface responseInterface
{
    /**
     * Return of a JSON response.
     *
     * @return JsonResponse
     */
    public static function send(): JsonResponse;
}
