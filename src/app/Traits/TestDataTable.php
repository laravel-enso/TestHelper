<?php

namespace LaravelEnso\TestHelper\app\Traits;

trait TestDataTable
{
    /** @test */
    public function dataTableIndex()
    {
        $init = $this->get(route($this->prefix.'.initTable', [], false));

        $init->assertStatus(200)
            ->assertJsonStructure(['template']);

        $params = (array) json_decode($init->getContent())
            + ['meta' => '{"start":0,"length":10,"sort":false,"total":false,"enum":false,"date":false}'];

        $this->get(route($this->prefix.'.getTableData', $params, false))
            ->assertStatus(200)
            ->assertJsonStructure(['data']);
    }
}
