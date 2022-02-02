<?php
namespace Tests\Feature;

use Tests\TestCase;

class HomePageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_userCanHitHomepage()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
