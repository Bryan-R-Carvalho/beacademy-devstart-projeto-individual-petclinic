<?php

namespace Tests\Feature;

use App\Models\{
    User,
    Owner,
    Pet
};
use Tests\TestCase;

class VaccineTest extends TestCase
{

    public function test_vaccine_without_authentication()
    {
        $response = $this->get('/vaccines');

        $response->assertStatus(302);
    }
    public function test_vaccine_with_authentication(){
        $user = User::where('is_admin', 1)->first();
        $response = $this->actingAs($user)->get('/vaccines');
        $response->assertStatus(200);
    }
}
