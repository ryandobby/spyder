<?php

namespace Tests\Unit;

use App\Models\Store;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    protected $seed = true;
    protected $user;

    public function setUp() : void
    {
        parent::setUp();
        $this->user = User::first();
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $store = Store::first();

        $response = $this->actingAs($this->user, 'sanctum')
                         ->get(route('api.stores.show', compact('store')));

        $response->assertStatus(200);

        $response->assertJsonFragment([
            'id' => $store->getKey(),
        ]);
    }
}
