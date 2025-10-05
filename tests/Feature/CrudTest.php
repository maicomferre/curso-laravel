<?php

namespace Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CrudTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_index_returns_ok()
    {
        $response = $this->get('/crud');
        $response->assertStatus(200);
        $response->assertViewIs('CRUD.home');
    }

    public function test_user_create_form_is_accessible()
    {
        $response = $this->get('/crud/create');
        $response->assertStatus(200);
        $response->assertViewIs('CRUD.user_create');
    }

    public function test_user_can_be_created()
    {
        $data = [
            "name" => "John Doe",
            "firstname" => "John",
            "lastname" => "Doe",
            "email" => "john.doe@example.com",
            "password" => "password123",
            "city" => "São Paulo",
            "state" => "SP",
            "birthdate" => "1990-01-01",
            "address" => "Rua A, 123",
            "phone" => "11999999999",
            "cpf" => "12345678900",
        ];

        $response = $this->post('/crud', $data);
        $response->assertRedirect('/crud');
        $this->assertDatabaseHas('users', [
            'email' => 'john.doe@example.com',
            'firstname' => 'John',
        ]);
    }

    public function test_user_edit_form_returns_ok()
    {
        $user = User::factory()->create();

        $response = $this->get("/crud/{$user->id}/edit");
        $response->assertStatus(200);
        $response->assertViewIs('CRUD.user_edit');
    }

    public function test_user_can_be_updated()
    {
        $user = User::factory()->create([
            'firstname' => 'OldName'
        ]);

        $response = $this->put("/crud/{$user->id}", [
            'firstname' => 'NewName',
            'lastname' => $user->lastname,
            'email' => $user->email,
            'city' => $user->city,
            'state' => $user->state,
            'birthdate' => $user->birthdate,
            'address' => $user->address,
            'phone' => $user->phone,
            'cpf' => $user->cpf,
        ]);

        $response->assertRedirect();
        $this->assertDatabaseHas('users', ['id' => $user->id, 'firstname' => 'NewName']);
    }

    public function test_user_can_be_deleted()
    {
        $user = User::factory()->create();

        $response = $this->delete('/crud/', ['user_id' => $user->id]);
        $response->assertRedirect('/crud');
        $this->assertDatabaseMissing('users', ['id' => $user->id]);
    }

    public function test_edit_nonexistent_user_returns_404()
    {
        $response = $this->get('/crud/-1/edit');
        $response->assertStatus(404);
    }
}
