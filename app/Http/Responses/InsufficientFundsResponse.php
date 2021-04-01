<?php

namespace App\Http\Responses;

use App\Common\Contracts\ResponseInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class InsufficientFundsResponse implements ResponseInterface
{
    /**
     * {@inheritDoc}
     */
    public static function build(): JsonResponse
    {
        return new JsonResponse([
            'code' => Response::HTTP_UNPROCESSABLE_ENTITY,
            'message' => 'Funds are insufficient to purchase the product.',
        ], Response::HTTP_UNPROCESSABLE_ENTITY);
    }
}
