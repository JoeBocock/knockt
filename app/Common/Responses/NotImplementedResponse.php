<?php

namespace App\Common\Responses;

use App\Common\Contracts\ResponseInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class NotImplementedResponse implements ResponseInterface
{
    /**
     * {@inheritDoc}
     */
    public static function build(): JsonResponse
    {
        return new JsonResponse([
            'code' => Response::HTTP_NOT_IMPLEMENTED,
            'message' => Response::$statusTexts[Response::HTTP_NOT_IMPLEMENTED],
        ], Response::HTTP_NOT_IMPLEMENTED);
    }
}
