<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ActivityControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_list_activities()
    {
        $activities = Activity::factory()->count(3)->create();
    
        $response = $this->get('/activities');

        $response->assertStatus(200)
                 ->assertJsonCount(3)
                 ->assertJsonPath('data0.type', 'surf');
    }
}

?>