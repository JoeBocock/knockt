<?php

namespace App\Common\Responses;

use App\Common\Contracts\ResponseInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class InsufficientStockResponse implements ResponseInterface
{
    /**
     * {@inheritDoc}
     */
    public static function build(): JsonResponse
    {
        return new JsonResponse([
            'code' => Response::HTTP_UNPROCESSABLE_ENTITY,
            'message' => 'Product is out of stock.',
        ], Response::HTTP_UNPROCESSABLE_ENTITY);
    }
}
