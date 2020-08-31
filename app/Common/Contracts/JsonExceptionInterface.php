<?php

namespace App\Common\Contracts;

use Illuminate\Http\JsonResponse;

interface JsonExceptionInterface
{
    /**
     * Return of a JSON response upon caught exception.
     *
     * @return JsonResponse
     */
    public function respond(): JsonResponse;
}
