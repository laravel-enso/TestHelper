<?php

namespace LaravelEnso\TestHelper\app\Traits;

trait TestDataTable
{
	/** @test */
	public function dataTableIndex()
    {
        $init = $this->get(route($this->prefix.'.initTable', [], false));

        $init->assertStatus(200)
            ->assertJsonStructure(['header', 'columns']);

        $params = (array) json_decode($init->getContent())
            + ['start' => 1, 'length' => 10, 'draw' => 1];

        $this->get(route($this->prefix.'.getTableData', $params, false))
            ->assertStatus(200)
            ->assertJsonStructure(['data', 'draw']);
    }
}