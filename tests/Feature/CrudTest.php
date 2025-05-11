<?php

namespace Tests\Feature;

use Tests\TestCase;
class CrudTest extends TestCase
{
    public function test_crud_http_request()
    {
        $response = $this->get('/crud');
        $response->assertStatus(200);

        $response = $this->get('/crud/-1/edit');
        $response->assertStatus(404);
    }
}
