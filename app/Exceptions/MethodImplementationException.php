<?php

namespace App\Exceptions;

use App\Common\Exceptions\JsonExceptionInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class MethodImplementationException extends ImplementationException implements JsonExceptionInterface
{
    /**
     * Return of a JSON response upon caught exception.
     *
     * @return JsonResponse
     */
    public function respond(): JsonResponse
    {
        return new JsonResponse([
            'error' => 'method_not_implemented',
            'message' => $this->getMessage(),
        ], Response::HTTP_NOT_FOUND);
    }
}
