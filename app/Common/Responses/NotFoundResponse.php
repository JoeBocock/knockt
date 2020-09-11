<?php

namespace App\Common\Responses;

use Illuminate\Http\JsonResponse;
use App\Common\Contracts\ResponseInterface;
use Illuminate\Http\Response;

class NotFoundResponse implements ResponseInterface
{
    /**
     * Return of a JSON response.
     *
     * @return JsonResponse
     */
    public static function send(): JsonResponse
    {
        return new JsonResponse([
            'error' => 'not_found',
            'message' => 'Not Found.',
        ], Response::HTTP_NOT_FOUND);
    }
}

