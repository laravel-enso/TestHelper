<?php

namespace LaravelEnso\TestHelper\app\Traits;

trait SignIn
{
    protected function signIn($user = null)
    {
        $user = $user ?? factory('App\User')->create();
        $user->role_id = intval($user->role_id);
        $this->actingAs($user);

        return $this;
    }
}
