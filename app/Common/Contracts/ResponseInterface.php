<?php

namespace App\Common\Contracts;

use Illuminate\Http\JsonResponse;

interface ResponseInterface
{
    /**
     * Build the appropriate JSON Response object and return it.
     *
     * @return JsonResponse
     */
    public static function build(): JsonResponse;
}
