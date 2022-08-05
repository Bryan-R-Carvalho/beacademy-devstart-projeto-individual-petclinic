<?php

namespace Tests\Feature;

use App\Models\{
    User,
    Owner,
    Pet
};
use Tests\TestCase;

class PetTest extends TestCase
{

    public function test_pet_without_authentication()
    {
        $response = $this->get('/owners/{id}/pets');
        $response->assertStatus(302);
    }
    public function test_pet_with_authentication(){
        $user = User::where('is_admin', 1)->first();
        $response = $this->actingAs($user)->get('/owners');
        $response->assertStatus(200);
    }
}
