<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
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

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        if (env('DING_ENABLED', '') === true) {
            if ($exception->getMessage() && $exception->getMessage() != 'Unauthenticated.') {
                $title = '运营后台错误信息';
                $markdown = "#### 错误信息  \n ".
                    "文件：{$exception->getFile()}\n\n ".
                    "行数：{$exception->getLine()}\n\n".
                    "地址：".url()->full()."\n\n".
                    // "用户IP： ".getIP()."\n\n".
                    "错误信息：".$exception->getMessage();
                ding()->markdown($title,$markdown);
            }
        }
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        return parent::render($request, $exception);
    }
}
