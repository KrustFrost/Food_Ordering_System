<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
    public function test_basic_test()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        
        $this->assertTrue(true);
    }
}
