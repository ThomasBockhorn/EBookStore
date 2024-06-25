<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class BookTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp(): void
    {
        parent::setUp();
        $this->seed();
    }

    public function test_to_see_if_book_table_has_data()
    {
        $this->assertDatabaseCount('books', 10);
    }

    public function test_to_see_if_a_user_can_see_all_books()
    {
        $response = $this->get('/books');
        $response->assertStatus(200);
    }
}
