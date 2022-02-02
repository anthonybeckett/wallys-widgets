<?php
namespace Tests\Feature;

use Tests\TestCase;

class PagesTest extends TestCase
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

    public function test_userCanHitCreatePage()
    {
        $response = $this->get('/create');

        $response->assertStatus(200);
    }
}
