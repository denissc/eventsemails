<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Auth\Events\Registered;
use App\Events\FeedbackReceived;
use App\User;

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
        $this->expectsEvents(Registered::class);
        
        $this->post('/register', [
            'name' => 'test',
            'email' => 'test@test.ss',
            'password' => '123123',
            'password_confirmation' => '123123',
        ]);
    }
    
    /**
     * Test feedback
     * 
     * @return void 
     */
    public function testFeedback()
    {
        
        $this->expectsEvents(FeedbackReceived::class);
        
        $user = factory(User::class)->create();

        $this->actingAs($user)->post('/feedback', [
            'feedback' => 'test feedback',
        ]);
    }
}
