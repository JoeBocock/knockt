<?php

namespace App\Common\Responses;

use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use App\Common\Contracts\ResponseInterface;

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
            'code' => Response::HTTP_NOT_FOUND,
            'message' => 'We couldn\'t find what you\'re looking for.',
        ], Response::HTTP_NOT_FOUND);
    }
}
