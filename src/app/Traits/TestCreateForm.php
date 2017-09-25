<?php

namespace LaravelEnso\TestHelper\app\Traits;

trait TestCreateForm
{
    /** @test */
    public function create()
    {
        $this->get(route($this->prefix.'.create', [], false))
            ->assertStatus(200)
            ->assertJsonStructure(['form']);
    }
}
