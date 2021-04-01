<?php

namespace App\Http\Responses;

use App\Common\Contracts\ResponseInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class NoContentResponse implements ResponseInterface
{
    /**
     * {@inheritDoc}
     */
    public static function build(): JsonResponse
    {
        return new JsonResponse([
            'code' => Response::HTTP_NO_CONTENT,
            'message' => Response::$statusTexts[Response::HTTP_NO_CONTENT],
        ], Response::HTTP_NO_CONTENT);
    }
}
