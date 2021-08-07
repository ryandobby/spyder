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
     * Test the store show endpoint.
     *
     * @return void
     */
    public function test_it_can_get_a_store()
    {
        $store = Store::first();

        $response = $this->actingAs($this->user, 'sanctum')
                         ->get(route('api.stores.show', compact('store')));

        $response->assertStatus(200);

        $response->assertJsonFragment([
            'id' => $store->getKey(),
        ]);
    }

    /**
     * Test the store state endpoint.
     *
     * @return void
     */
    public function test_it_can_get_all_stores_by_state()
    {
        $stores = Store::whereState('OK');

        $response = $this->actingAs($this->user, 'sanctum')
                         ->post(route('api.stores.state'), ['state' => 'OK']);

        $response->assertStatus(200);

        $response->assertJsonCount($stores->count());
    }
}
