<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EventEmailsTest extends TestCase
{
    use DatabaseTransactions,WithoutMiddleware;
    
    /**
     * Test register step
     * 
     * @return void 
     */
    public function testRegistration()
    {
        $response = $this->post('/register', [
            'name' => 'test',
            'email' => 'test@test.ss',
            'password' => '123123',
            'password_confirmation' => '123123',
        ]);

        $response->assertStatus(302);
    }
    
    /**
     * Test feedback
     * 
     * @return void 
     */
    public function testFeedback()
    {
        $response = $this->post('/feedback', [
            'feedback' => 'test',
        ]);

        $response->assertStatus(200);
    }
}
