<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\ContactUs;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EfunContactFormTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        ContactUs::create(['name' => 'test1', 'email' => 'test@example.com', 'message' => 'this is message!']);
        $this->assertDatabaseHas('contact_us', [
            'name' => 'test1', 'email' => 'test@example.com', 'message' => 'this is message!'
        ]);
    }
}
