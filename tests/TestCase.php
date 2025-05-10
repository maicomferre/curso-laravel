<?php

namespace Tests\Feature;

use Tests\TestCase;

class HomeController extends TestCase
{
    public function test_home_returns_ok()
    {
        $response = $this->get('/home');
        $response->assertStatus(200);
    }
}
