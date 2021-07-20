<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Support\Facades\Log;

class Handler extends ExceptionHandler {
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];
    /*
    public function render($request, Throwable $exception) {

        Log::info($exception->getMessage(), [
            'url' => Request::url(),
            'input' => Request::all(),
        ]);

        if ($this->isHttpException($exception)) {
            $err_view = 'pub_theme::errors.'.$exception->getStatusCode();
            if (view()->exists($err_view)) {
                return response()->view($err_view, ['message' => $exception->getMessage()], $exception->getStatusCode());
            }
        }

        return parent::render($request, $exception);
    }
    */

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register() {
    }
}
