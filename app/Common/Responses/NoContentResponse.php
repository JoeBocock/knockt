<?php

namespace App\Common\Responses;

use App\Common\Contracts\ResponseInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class NoContentResponse implements ResponseInterface
{
    /**
     * Return of a JSON response.
     *
     * @return JsonResponse
     */
    public static function send(): JsonResponse
    {
        return new JsonResponse([], Response::HTTP_NO_CONTENT);
    }
}
