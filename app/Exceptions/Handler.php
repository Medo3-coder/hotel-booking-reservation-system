<?php

namespace App\Exceptions;

use App\Traits\ResponseTrait;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

class Handler extends ExceptionHandler {

    use ResponseTrait;
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */

    /*
     *   @var $dontReport
     *  property contains an array of exception classes that should not be reported.
     *  These exceptions will not be logged by the application.
     */

    protected $dontReport = [
        AuthenticationException::class,
        AuthorizationException::class,
        HttpException::class,
        ModelNotFoundException::class,
        TokenMismatchException::class,
        ValidationException::class,
    ];

    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function report(Throwable $exception): void {
        parent::report($exception);
    }

    public function render($request, Throwable $exception) {
        if ($request->is('api/*')) {
            if ($exception instanceof ModelNotFoundException) {
                $msg = "Model Not Found";
            }
            if ($exception instanceof NotFoundHttpException) {
                $msg = "Not Found HTTP";
            }
            if ($exception instanceof AuthenticationException) {
                return $this->unauthenticatedReturn();
            }
            if ($request->expectsJson()) {
                return response()->json(['error' => 'Unauthenticated.'], 401);
            }
            return $this->response('exception', $message ?? $exception->getMessage(),
                ['line' => $exception->getLine(), 'file' => $exception->getFile()]);
        }

        return parent::render($request, $exception);
    }
}
