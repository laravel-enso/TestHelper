<?php

namespace LaravelEnso\TestHelper\app\Traits;

trait SignIn
{
    protected function signIn($user = null)
    {
        $user = $user ?: factory('App\User')->create();

        $this->actingAs($user);

        return $this;
    }
}
