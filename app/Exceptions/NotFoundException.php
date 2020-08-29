<?php

namespace App\Exceptions;

use App\Common\Exceptions\JsonExceptionInterface;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class NotFoundException extends Exception implements JsonExceptionInterface
{
    /**
     * Return of a JSON response upon caught exception.
     *
     * @return JsonResponse
     */
    public function respond(): JsonResponse
    {
        return new JsonResponse([
            'error' => 'not_found',
            'message' => 'Not Found.',
        ], Response::HTTP_NOT_FOUND);
    }
}
