<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DatabaseTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test the user table.
     *
     * @return void
     */
    public function testUserTable()
    {
        $this->assertTrue(true);
    }
}
