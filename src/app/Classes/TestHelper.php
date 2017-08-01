<?php

namespace LaravelEnso\TestHelper\app\Classes;

use App\Exceptions\Handler;
use Illuminate\Contracts\Debug\ExceptionHandler;
use Tests\TestCase;

class TestHelper extends TestCase
{

    protected function disableExceptionHandling()
    {
        $this->app->instance(ExceptionHandler::class, new class() extends Handler {
            public function __construct()
            {
            }

            public function report(\Exception $e)
            {
            }

            public function render($request, \Exception $e)
            {
                throw $e;
            }
        });
    }

    protected function signIn($user = null)
    {
        $user = $user ?: factory('App\User')->create();

        $this->actingAs($user);

        return $this;
    }
}