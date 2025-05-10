<?php

namespace Tests\Feature;

use Tests\TestCase;

class HomeController extends TestCase
{
    public function test_crud()
    {
        $response = $this->get('/crud');
        $response->assertStatus(200);
    }
}
