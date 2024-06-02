<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PrefectureApiTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_can_retrieve_prefectures(): void
    {
        $response = $this->get('/api/prefectures');

        $response->assertStatus(200);
        $response->assertJsonStructure([
            '*' => [
                'id',
                'name'
            ]
        ]);
    }
}
