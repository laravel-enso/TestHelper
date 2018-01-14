<?php

namespace LaravelEnso\TestHelper\app\Traits;

trait SignIn
{
    protected function signIn($user = null)
    {
        set_time_limit(30);

        $user = $user ?: factory('App\User')->create();

        $this->actingAs($user);

        return $this;
    }
}
