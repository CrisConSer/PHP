<?php
namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\Sanctum;

class LoginTest extends TestCase
{
    use RefreshDatabase;
    public function testUserRegistration()
    {
        $userData = [
            'name' => 'Antonio',
            'email' => 'anton@pokemon.com',
            'password' => 'pokemon123',
        ];
        $response = $this->postJson('api/register', $userData);
        $response->assertStatus(200)
            ->assertJsonStructure([
                'data' => [
                    'id',
                    'name',
                    'email',
                    'created_at',
                    'updated_at'
                ],
                'acces_token',
                'token_type'
            ]);
        $this->assertDatabaseHas('users', [
            'name' => $userData['name'],
            'email' => $userData['email']
        ]);
    }
    public function test_login()
    {
        $user = User::factory()->create([
            'email' => 'anton@pokemon.com',
            'password' => Hash::make('pokemon123'),
        ]);
        $response = $this->postJson('/api/login', [
            'email' => $user->email,
            'password' => 'pokemon123',
        ]);
        $response->assertStatus(200);
        $response->assertJsonStructure(['access_token']);
    }
    public function test_logout()
{
    $user = User::factory()->create();
    Sanctum::actingAs($user);
    $response = $this->postJson('/api/logout');
    $response->assertStatus(200);
    $this->assertCount(0, $user->tokens);
}
}
