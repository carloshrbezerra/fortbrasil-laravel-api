<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DepartamentoRegionalTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testInsereDepartametoRegional()
    {
        $departamento_regional = factory('Models\DepartamentoRegional')->create();
        $response = $this->post('/departamento-regional', $departamento_regional);

        $response->assertStatus(200);
    }
}
