<?php

namespace Tests\Feature;

use Tests\TestCase;

class HomeApiTest extends TestCase
{
    public function test_home_api_returns_ok()
    {
        $response = $this->get('/api/home-api');
        $response->assertStatus(200);
    }
}
