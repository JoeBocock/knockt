<?php

namespace App\Common\Responses;

use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use App\Common\Contracts\ResponseInterface;

class InsufficientStockResponse implements ResponseInterface
{
    /**
     * Return of a JSON response.
     *
     * @return JsonResponse
     */
    public static function send(): JsonResponse
    {
        return new JsonResponse([
            'error' => 'insufficient_Stock',
            'message' => 'Product is out of stock.',
        ], Response::HTTP_UNPROCESSABLE_ENTITY);
    }
}
