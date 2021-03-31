<?php

namespace App\Http\Responses;

use App\Common\Contracts\ResponseInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class NotFoundResponse implements ResponseInterface
{
    /**
     * {@inheritDoc}
     */
    public static function build(): JsonResponse
    {
        return new JsonResponse([
            'code' => Response::HTTP_NOT_FOUND,
            'message' => Response::$statusTexts[Response::HTTP_NOT_FOUND],
        ], Response::HTTP_NOT_FOUND);
    }
}
