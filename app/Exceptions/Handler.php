<?php

namespace App\Exceptions;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;
use Laravel\Lumen\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpFoundation\Exception\BadRequestException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        AuthorizationException::class,
        HttpException::class,
        ModelNotFoundException::class,
        ValidationException::class,
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Exception
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Illuminate\Http\Response|\Illuminate\Http\JsonResponse
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {
        switch (get_class($exception)) {
            case BadRequestException::class:
            case ValidationException::class:
                return $this->sendError(
                    $exception->getMessage(),
                    Response::HTTP_BAD_REQUEST,
                    $exception->errors()
                );

            default :
                if (env('APP_DEBUG') && env('APP_ENV') === 'local') {
                    return parent::render($request, $exception);
                }

                return $this->sendError(
                    $exception->getMessage(),
                    $this->getCode($exception)
                );
        }
    }

    /**
     * @param $message
     * @param $code
     * @param $errors
     * @return JsonResponse
     */
    protected function sendError($message, $code, $errors = []): JsonResponse
    {
        return response()->json([
            'message' => $message,
            'code' => $code,
            'error' => $errors
        ]);
    }

    /**
     * @param Throwable $e
     * @return int
     */
    protected function getCode(Throwable $e): int
    {
        if (method_exists($e, 'getStatusCode')) {
            return (int) $e->getStatusCode();
        }

        return (int) $e->getCode();
    }
}
