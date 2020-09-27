<?php

namespace App\Common\Responses;

use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use App\Common\Contracts\ResponseInterface;

class InsufficientFundsResponse implements ResponseInterface
{
    /**
     * Return of a JSON response.
     *
     * @return JsonResponse
     */
    public static function send(): JsonResponse
    {
        return new JsonResponse([
            'error' => 'insufficient_funds',
            'code' => Response::HTTP_UNPROCESSABLE_ENTITY,
            'message' => 'Funds are insufficient to purchase the product.',
        ], Response::HTTP_UNPROCESSABLE_ENTITY);
    }
}
