<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        // Palitan ang assertOk() ng assertRedirect() o i-adjust base sa gusto mo
        $response->assertStatus(302); 
    }
}